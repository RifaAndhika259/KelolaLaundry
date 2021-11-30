<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Ownertransaksicontroller extends Controller
{

    public function index(){
        return view('owner.owner');
    }

    public function transaksi()
    {
        return view('owner.transaksi.riwayat');
    }
}
