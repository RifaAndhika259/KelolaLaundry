<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Admintransaksicontroller extends Controller
{
    public function transaksi()
    {
        return view('admin/transaksi/transaksi');
    }
    public function list()
    {
        return view('admin/transaksi/listtransaksi');
    }
    public function riwayat()
    {
        return view('admin/transaksi/riwayat');
    }
    public function detail()
    {
        return view('admin/transaksi/detailtransaksi');
    }
}
