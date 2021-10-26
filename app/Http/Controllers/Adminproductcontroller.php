<?php

namespace App\Http\Controllers;

use App\Product;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class Adminproductcontroller extends Controller
{
    public function product(Request $request)
    {
        $products = Product::all();
        return view('admin/product.product', compact('products'));
    }

    public function create(Request $request)
    {
        Product::create($request->all());
        Alert::success('Berhasil', 'Data Sudah BerhasilDitambahkan');
        return redirect('admin/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin/product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $update = Product::find($id);
        $update->update($request->all());
        Alert::success('Berhasil', 'Data Sudah Berhasil Diubah');
        return redirect('admin/product');
    }

    public function delete($id)
    {
        $delete = Product::find($id);
        $delete->delete();
        Alert::success('Berhasil', 'Data Sudah Berhasil Dihapus');
        return redirect('admin/product');
    }
}
