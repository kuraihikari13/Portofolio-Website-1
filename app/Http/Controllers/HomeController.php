<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home\home');
    }

    public function kemitraan(){
        return view('home\kemitraan');
    }

    public function oulet(){
        return view('home\oulet');
    }

    public function menu(){
        return view('home\menu');
    }

    public function mitraform(){
        return view('home\mitraform');
    }

    public function login(){
        return view('home\login');
    }
}
