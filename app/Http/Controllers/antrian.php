<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class antrian extends Controller
{
    //
    public function index(){
        $data["antri"] = 0;
        return view("antrian");
    }
}
