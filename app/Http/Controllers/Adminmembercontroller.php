<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adminmembercontroller extends Controller
{
    public function member(){
    return view('admin/Admin-member/member');
    }
}
