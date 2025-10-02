<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{

    
    public function actionLogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)){
            if(auth()->user()->cred == 1){
                return redirect('admin-home');
            }
            else if(auth()->user()->cred == 2){
                $request->session()->put('email', $request->input('email'));
                return redirect('user-home');
            } else {
                Session::flash('error', 'Akun Anda belum dikonfirmasi');
                return redirect('login');
            }
            
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('login');
        }
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
