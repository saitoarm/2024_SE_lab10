<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        $product_count = Product::all()->count();
        return view('dashboard_product')->with('product_count', $product_count);
    }
}
