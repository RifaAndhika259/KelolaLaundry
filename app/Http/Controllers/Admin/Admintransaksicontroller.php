<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\Product;
use App\Transaction;
use Carbon\Carbon;

class Admintransaksicontroller extends Controller
{
    public function transaksi()
    {
        $product = Product::all();
        $member  = Member::all();
        return view('admin/transaksi/transaksi', compact('product','member'));
    }

    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        // return $price;
        $price = $product->price;

        // dd($request->all());
        $transaction = new Transaction();
        $transaction->member_id = $request->member_id;
        $transaction->product_id = $request->product_id;
        $transaction->amount     = $request->amount * $price;
        // $transaction->save();

        // transaction_code
        $codename = "INV";
        $dateCreate = Carbon::now()->format('Y-m-d');
        $resultDate = str_replace('-','',$dateCreate);
        $result = $codename.$resultDate.$request->product_id.$request->member_id;
        $transaction->code_transaction = $result;
        $transaction->save();
        // return $transaction;


        return redirect('/admin/listtransaksi');
    }
    public function list()
    {
        $transaction = Transaction::join('products','products.id','=','transactions.product_id')
                                ->join('member','member.id','=','transactions.member_id')->get();
                    // return $transaction;
        // penjumlahan SD
        // $price = "2000";
        // $totalPrice = "2000";
        // $jumlahAkhir = $price + $totalPrice;
        // return $jumlahAkhir;
        return view('admin/transaksi/listtransaksi', compact('transaction'));
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
