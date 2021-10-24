<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admintransaksicontroller extends Controller
{
    public function transaksi(){
     return view('admin/Admin-transaksi/transaksi');
    }
    public function list(){
        return view('admin/Admin-transaksi/listtransaksi');
    }
    public function riwayat(){
        return view('admin/Admin-transaksi/riwayat');
    }
    public function detail(){
        return view('admin/Admin-transaksi/detailtransaksi');
    }
}
