<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index(){
        $name = "Ohmmy";
        $phone = "1234567890";
        $address = "ขอนแก่น";

        return view('myshop', ['name' => $name, 'phone' => $phone, 'address' => $address]);
    }
}
