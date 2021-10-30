<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ownertransaksicontroller extends Controller
{
    public function transaksi()
    {
        return view('owner/transaksi/transaksi');
    }
    public function list()
    {
        return view('owner/transaksi/listtransaksi');
    }
    public function riwayat()
    {
        return view('owner/transaksi/riwayat');
    }
    public function detail()
    {
        return view('owner/detailtransaksi/detailtransaksi');
    }
}
