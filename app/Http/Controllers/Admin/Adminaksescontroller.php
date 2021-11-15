<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Adminaksescontroller extends Controller
{
    public function pengguna()
    {
        return view('admin/manajementuser/pengguna');
    }
    public function HakAkses()
    {
        return view('admin/manajementuser/hakakses');
    }
}
