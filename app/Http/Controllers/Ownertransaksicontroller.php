<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ownertransaksicontroller extends Controller
{
    public function transaksi()
    {
        return view('owner.transaksi.riwayat');
    }
}
