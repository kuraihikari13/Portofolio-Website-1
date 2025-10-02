<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ShopModel;

use Session;

class TempController extends Controller
{
    public function registerTemp(Request $request)
    {
        $temp = ShopModel::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'luas' => $request->luas,
            'modal' => $request->modal,
            'listrik' => $request->listrik,
            'staff' => $request->staff,
            'lokasi' => $request->lokasi,
            'address' => $request->address,
            'tier' => '0',
        ]);

        $tempUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'cred' => '3',
        ]);

        Session::flash('error', 'Mohon tunggu konfirmasi');
        return redirect('login');
    }

    public function approveShop($id)
    {

        $approve = ShopModel::where('shop_id', $id)->first();

        $email = $approve->email;

        $approve->tier = '1';
        $approve->update();
        
        $user = User::where('email', $email)->first();

        $user->cred = '2';
        $user->update();

        return redirect('admin-home');
    }
    public function deleteshop($id)
    {
        $delete_shop = ShopModel::find($id);

        $delete_shop->delete();

        return redirect('admin-home');
    }
}
