<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admintransaksicontroller extends Controller
{
    public function transaksi()
    {
        return view('admin//transaksi/transaksi');
    }
    public function list()
    {
        return view('admin/listtransaksi/listtransaksi');
    }
    public function riwayat()
    {
        return view('admin/riwayat/riwayat');
    }
    public function detail()
    {
        return view('admin/detailtransaksi/detailtransaksi');
    }
}
