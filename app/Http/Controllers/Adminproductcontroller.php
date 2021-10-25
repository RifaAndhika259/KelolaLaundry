<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class Adminproductcontroller extends Controller
{
    public function product(Request $request){
        $products = Product::all();
        return view('admin/Admin-product/product', compact('products'));
    }
}
