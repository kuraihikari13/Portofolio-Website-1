<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopModel;
use App\Models\ItemModel;
use Illuminate\Support\Facades\DB;
use App\Models\Restock;
use App\Models\RestockDetail;

class AdminController extends Controller
{

    /**
     * 
     * @param mixed $item
     * @return void
     * 
     * */

    public function adminHome(){
        $temp_shops = ShopModel::select("*")->whereRaw('tier = ?', '0')->get();
        $shops = ShopModel::select("*")->whereRaw('tier != ?', '0')->get();
        $item_lists = ItemModel::all();
        $restock = Restock::select("*")->whereRaw('approved != ?', '1')->get();
        $restock_detail = RestockDetail::all();
        return view('dashboard-admin.admin-home', compact('temp_shops', 'shops', 'restock', 'restock_detail', 'item_lists'));
    }

    public function approveRestock($id)
    {
        $restock = Restock::findOrFail($id);

        $restock->update([
            'approved' => '1',
        ]);

        return redirect ('admin-home');
    }

    public function shopHome(){
        return view('dashboard-admin.user-home');
    }

    public function shopTable(){
        $shop_lists = ShopModel::select("*")->whereRaw('tier != ?', '0')->get();
        return view('dashboard-admin.shoptable', compact('shop_lists'));
    }

    public function itemTable(){
        $item_lists = ItemModel::all();
        return view('dashboard-admin.itemtable', compact('item_lists'));
    }

    public function inputItem(){
        return view('dashboard-admin.input_item');
    }

    public function editItem(ItemModel $item){
        return view('dashboard-admin.edit_item', compact('item'));
    }

    public function editShop(ShopModel $shop){
        return view('dashboard-admin.edit_shop', compact('shop'));
    }

}
