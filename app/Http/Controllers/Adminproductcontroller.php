<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adminproductcontroller extends Controller
{
    public function product(){
        return view('admin/Admin-product/product');
    }
}