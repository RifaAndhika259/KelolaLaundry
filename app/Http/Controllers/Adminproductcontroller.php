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
        return view('admin/Admin-product/product', compact('products'));
    }

    public function create(Request $request)
    {
        Product::create($request->all());
        Alert::success('Berhasil', 'Data Sudah Ditambahkan');
        return redirect('admin/Admin-product/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.admin-product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $update = Product::find($id);
        $update->update($request->all());
        Alert::success('Berhasil', 'Data Sudah Diubah');
        return redirect('admin/Admin-product/product');
    }

    public function delete($id)
    {
        $delete = Product::find($id);
        $delete->delete();
        Alert::success('Berhasil', 'Data Sudah Dihapus');
        return redirect('admin/Admin-product/product');
    }
}
