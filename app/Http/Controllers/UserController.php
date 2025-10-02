<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\ShopModel;
use App\Models\Employee;
use App\Models\EmployeeAttendance;
use App\Models\EmployeeAttendanceCheck;
use App\Models\Attendance;
use App\Models\Restock;
use App\Models\RestockDetail;
use App\Models\ItemModel;

class UserController extends Controller
{

    public function home(Request $request)
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
        $median = ceil($median / 10) * 10;
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
        $check_c1 = 0; $check_c2 = 0; $check_c3 = 0;

        $status = '';

        foreach($tier_calc as $tier)
        {
            $tier_gold = $tier['result_c1'];
            $tier_silver = $tier['result_c2'];
            $tier_bronze = $tier['result_c3'];

            if($tier_gold <= 10.0){
                $gold[$check_c1] = $tier;
                $check_c1++;
            } else if($tier_silver <= 25.0) {
                $silver[$check_c2] = $tier;
                $check_c2++;
            } else {
                $bronze[$check_c3] = $tier;
                $check_c3++;
            }

            $check++;
        }

        $email = $request->session()->get('email');
        $shop = ShopModel::select("*")->whereEmail($email)->first();
    
        foreach($gold as $key_gold)
        {
            if($key_gold['shop_id'] == $shop['shop_id'])
            {
                $status = 'GOLD';
            }
        }
        foreach($silver as $key_silver)
        {
            if($key_silver['shop_id'] == $shop['shop_id'])
            {
                $status = 'SILVER';
            }
        }
        foreach($bronze as $key_bronze)
        {
            if($key_bronze['shop_id'] == $shop['shop_id'])
            {
                $status = 'BRONZE';
            }
        }

        $request->session()->put('tier', $status);

        $refresh = EmployeeAttendanceCheck::whereDate('created_at', '<', now()->subDays(1));
        $refresh->delete();

        $employee = Employee::Select("*")->whereRaw('shop_id = ?', $shop['shop_id'])->get();
        $attendance = EmployeeAttendanceCheck::select("*")->whereRaw('shop_id = ?', $shop['shop_id'])->get();
        $attendance_count = $attendance->count();

        return view('dashboard-user.user-home', compact('shop', 'employee', 'attendance', 'attendance_count', 'status'));

    }
    public function employee(Request $request){
        $email = $request->session()->get('email');
        $shop = ShopModel::select("*")->whereEmail($email)->first();
        $employee = Employee::Select("*")->whereRaw('shop_id = ?', $shop['shop_id'])->get();
        $employee_count = $employee->count();
        $employee_total = $shop['staff'];
        return view('dashboard-user\employee-table', compact('employee', 'employee_count', 'employee_total'));
    }
    public function clockIn(Request $request){
        $email = $request->session()->get('email');
        $shop = ShopModel::select("*")->whereEmail($email)->first();
        $employee = Employee::Select("*")->whereRaw('shop_id = ?', $shop['shop_id'])->get();
        $employee_count = $employee->count();
        $employee_total = $shop['staff'];

        $refresh = EmployeeAttendanceCheck::whereDate('created_at', '<', now()->subDays(1));
        $refresh->delete();

        $attendance = EmployeeAttendanceCheck::select("*")->whereRaw('shop_id = ?', $shop['shop_id'])->get();
        $attendance_count = $attendance->count();

        return view('dashboard-user\clock-in', compact('employee', 'employee_count', 'employee_total', 'attendance', 'attendance_count'));
    }
    public function attendanceHistory(Request $request)
    {
        $email = $request->session()->get('email');
        $shop = ShopModel::select("*")->whereEmail($email)->first();
        $employee = Employee::Select("*")->whereRaw('shop_id = ?', $shop['shop_id'])->get();
        $employee_count = $employee->count();
        $employee_total = $shop['staff'];

        $refresh = EmployeeAttendanceCheck::whereDate('created_at', '<', now()->subDays(1));
        $refresh->delete();

        $attendance = EmployeeAttendance::select("*")->whereRaw('shop_id = ?', $shop['shop_id'])->get();
        
        $attendance_count = Attendance::all();

        return view('dashboard-user\employee-attendance-history', compact('employee', 'employee_count', 'employee_total', 'attendance', 'attendance_count' ));
    }
    public function employeeAdd(){
        return view('dashboard-user\employee-add');
    }
    public function employeeEdit(Employee $employee){
        return view('dashboard-user.employee-edit', compact('employee'));
    }
    public function restockView(Request $request)
    {
        $item_lists = ItemModel::all();
        return view('dashboard-user.restock-request', compact('item_lists'));
    }
    public function restock(Request $request)
    {
        $item_lists = ItemModel::all();
        $email = $request->session()->get('email');
        $shop = ShopModel::select("*")->whereEmail($email)->first();
        $today = Carbon::now()->format('Y-m-d H:i:s');

        $lists = $request->restock;

        $restock = Restock::create([
            'shop_id' => $shop['shop_id'],
            'approved' => '0',
        ]);

        $check = Restock::select("*")->whereRaw('created_at = ?', $today)->first();

        foreach($lists as $key)
        {
            $restock_detail = RestockDetail::create([
                'req_id' => $check['req_id'],
                'item_id' => $key,
                'req_stock' => '0',
            ]);
        }

        return redirect('restock-request');
    }
    public function restockHistory(Request $request)
    {
        $item_lists = ItemModel::all();
        $email = $request->session()->get('email');
        $shop = ShopModel::select("*")->whereEmail($email)->first();
        $restock = Restock::select("*")->whereRaw('shop_id = ?', $shop['shop_id'])->get();
        $lists = RestockDetail::all();

        return view('dashboard-user.restock-history', compact('item_lists', 'restock', 'lists'));
    }
    public function paycheck(Request $request){
        $email = $request->session()->get('email');
        $shop = ShopModel::select("*")->whereEmail($email)->first();
        $employee = Employee::Select("*")->whereRaw('shop_id = ?', $shop['shop_id'])->get();
        $employee_count = $employee->count();
        $m = date('m');
        $year = date('Y');

        $attendance = Attendance::whereMonth('created_at', '=', $m)->whereYear('created_at', '=', $year)->get();

        $count = $attendance->count();

        if($m == 1){ $month = 'Januari'; }
        else if($m == 2){ $month = 'Februari'; } 
        else if($m == 3){ $month = 'Maret'; } 
        else if($m == 4){ $month = 'April'; } 
        else if($m == 5){ $month = 'Mei'; } 
        else if($m == 6){ $month = 'Juni'; } 
        else if($m == 7){ $month = 'Juli'; } 
        else if($m == 8){ $month = 'Agustus'; } 
        else if($m == 9){ $month = 'September'; } 
        else if($m == 10){ $month = 'Oktober'; } 
        else if($m == 11){ $month = 'November'; } 
        else if($m == 12){ $month = 'Desember'; }

        $tier = $request->session()->get('tier');

        if ($tier == 'GOLD') { $pay = 1500000; }
        else if ($tier == 'SILVER') { $pay = 1250000; }
        else if ($tier == 'BRONZE') { $pay = 1000000; }

        $employee_total = $shop['staff'];

        if($count == NULL){
            $check = 0;
            return view('dashboard-user\employee-paycheck', compact('employee', 'employee_count', 'employee_total', 'month', 'year', 'pay' , 'check')); 

        } else {
            $check = 1;
            return view('dashboard-user\employee-paycheck', compact('employee', 'employee_count', 'employee_total', 'month', 'year', 'pay' , 'attendance', 'check')); 
            
        }

         
    }
}
