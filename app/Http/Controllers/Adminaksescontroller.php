<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adminaksescontroller extends Controller
{
    public function pengguna(){
      return view('admin/Admin-manajement/pengguna');
    }
    public function HakAkses(){
        return view('admin/Admin-manajement/hakakses');
      }
}
