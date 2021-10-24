<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adminoutletcontroller extends Controller
{
    public function outlet(){
        return view('admin/Admin-outlet/outlet');
    }
}
