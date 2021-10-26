<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adminaksescontroller extends Controller
{
    public function pengguna()
    {
        return view('admin/pengguna/pengguna');
    }
    public function HakAkses()
    {
        return view('admin/hakakses/hakakses');
    }
}
