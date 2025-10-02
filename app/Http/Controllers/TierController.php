<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ShopModel;

class TierController extends Controller
{
    public static function index()
    {
        $shop = ShopModel::select("*")->whereRaw('tier != 0')->get();

        $shop_count = $shop->count();

        $shop_converted = Array();

        $a = 0;

        foreach($shop as $key)
        {
            $sum = 0;

            if($key->luas <= 6){
                $luas = 80;
            } else if ($key->luas <= 9 && $key->luas > 6){
                $luas = 90;
            } else {
                $luas = 100;
            }

            $sum += $luas;

            if($key->modal < 50){
                $modal = 80;
            } else if ($key->modal < 100 && $key->modal > 49){
                $modal = 90;
            } else {
                $modal = 100;
            }

            $sum += $modal;

            if($key->lokasi == 'Jalan Lokal'){
                $lokasi = 80;
            } else if ($key->lokasi == 'Jalan Arteri'){
                $lokasi = 90;
            } else if ($key->lokasi == 'Mall atau Swalayan'){
                $lokasi = 100;
            }

            $sum += $lokasi;

            if($key->listrik < 2200){
                $listrik = 80;
            } else if ($key->listrik < 3500 && $key->listrik > 2200){
                $listrik = 90;
            } else {
                $listrik = 100;
            }

            $sum += $listrik;

            if($key->staff < 6){
                $staff = 80;
            } else if ($key->staff < 10 && $key->staff > 5){
                $staff = 90;
            } else {
                $staff = 100;
            }

            $sum += $staff;

            $shop_converted[$a] = [
                'shop_id' => $key->shop_id,
                'luas' => $luas,
                'modal' => $modal,
                'lokasi' => $lokasi,
                'listrik' => $listrik,
                'staff' => $staff,
                'total' => $sum,
            ];

            $a++;
        }

        $b = $a / 2;

        $a--;

        $shop_converted = collect($shop_converted)->sortBy('total')->reverse()->toArray();

        $max = collect($shop_converted)->max('total');
        $median = collect($shop_converted)->median('total');
        $min = collect($shop_converted)->min('total');


        $c1 = collect($shop_converted)->where('total', $max)->first();
        $c2 = collect($shop_converted)->where('total', $median)->first();
        $c3 = collect($shop_converted)->where('total', $min)->first();
        

        $tier_calc = Array();

        $a = 0;

        foreach($shop_converted as $calc)
        {
            $c1_luas = $c1['luas'];
            $c2_luas = $c2['luas'];
            $c3_luas = $c3['luas'];
            $calc_luas = $calc['luas'];

            $sum_c1 = 0; $sum_c2 = 0; $sum_c3 = 0;

            $c1_luas = $c1_luas - $calc_luas; $c1_luas *= $c1_luas; $sum_c1 += $c1_luas;
            $c2_luas = $c2_luas - $calc_luas; $c2_luas *= $c2_luas; $sum_c2 += $c2_luas;
            $c3_luas = $c3_luas - $calc_luas; $c3_luas *= $c3_luas; $sum_c3 += $c3_luas;

            $c1_modal = $c1['modal'];
            $c2_modal = $c2['modal'];
            $c3_modal = $c3['modal'];
            $calc_modal = $calc['modal'];

            $c1_modal = $c1_modal - $calc_modal; $c1_modal *= $c1_modal; $sum_c1 += $c1_modal;
            $c2_modal = $c2_modal - $calc_modal; $c2_modal *= $c2_modal; $sum_c2 += $c2_modal;
            $c3_modal = $c3_modal - $calc_modal; $c3_modal *= $c3_modal; $sum_c3 += $c3_modal;

            $c1_lokasi = $c1['lokasi'];
            $c2_lokasi = $c2['lokasi'];
            $c3_lokasi = $c3['lokasi'];
            $calc_lokasi = $calc['lokasi'];

            $c1_lokasi = $c1_lokasi - $calc_lokasi; $c1_lokasi *= $c1_lokasi; $sum_c1 += $c1_lokasi;
            $c2_lokasi = $c2_lokasi - $calc_lokasi; $c2_lokasi *= $c2_lokasi; $sum_c2 += $c2_lokasi;
            $c3_lokasi = $c3_lokasi - $calc_lokasi; $c3_lokasi *= $c3_lokasi; $sum_c3 += $c3_lokasi;

            $c1_listrik = $c1['listrik'];
            $c2_listrik = $c2['listrik'];
            $c3_listrik = $c3['listrik'];
            $calc_listrik = $calc['listrik'];

            $c1_listrik = $c1_listrik - $calc_listrik; $c1_listrik *= $c1_listrik; $sum_c1 += $c1_listrik;
            $c2_listrik = $c2_listrik - $calc_listrik; $c2_listrik *= $c2_listrik; $sum_c2 += $c2_listrik;
            $c3_listrik = $c3_listrik - $calc_listrik; $c3_listrik *= $c3_listrik; $sum_c3 += $c3_listrik;

            $c1_staff = $c1['staff'];
            $c2_staff = $c2['staff'];
            $c3_staff = $c3['staff'];
            $calc_staff = $calc['staff'];

            $c1_staff = $c1_staff - $calc_staff; $c1_staff *= $c1_staff; $sum_c1 += $c1_staff;
            $c2_staff = $c2_staff - $calc_staff; $c2_staff *= $c2_staff; $sum_c2 += $c2_staff;
            $c3_staff = $c3_staff - $calc_staff; $c3_staff *= $c3_staff; $sum_c3 += $c3_staff;

            $sum_c1 = sqrt($sum_c1);
            $sum_c2 = sqrt($sum_c2);
            $sum_c3 = sqrt($sum_c3);

            $tier_calc[$a] = [
                'shop_id' => $calc['shop_id'],
                'result_c1' => $sum_c1,
                'result_c2' => $sum_c2,
                'result_c3' => $sum_c3,
            ];

            $a++;
        }

        $check = 0;
        $gold = Array(); $silver = Array(); $bronze = Array();

        foreach($tier_calc as $tier)
        {
            $tier_gold = $tier['result_c1'];
            $tier_silver = $tier['result_c2'];
            $tier_bronze = $tier['result_c3'];

            if($tier_gold <= 10.0){
                $gold[] = $tier;
            } else if($tier_silver <= 25.0 && $tier_bronze > 10.0) {
                $silver[] = $tier;
            } else if($tier_bronze <= 10.0) {
                $bronze[] = $tier;
            }

            $check++;
        }
    }
}
