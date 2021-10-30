<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kasirtransaksicontroller extends Controller
{
    public function transaksi()
    {
        return view('kasir/transaksi/transaksi');
    }
    public function list()
    {
        return view('kasir/transaksi/listtransaksi');
    }
    public function riwayat()
    {
        return view('kasir/transaksi/riwayat');
    }
    public function detail()
    {
        return view('kasir/detailtransaksi/detailtransaksi');
    }
}
