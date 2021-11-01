<?php

namespace App\Http\Controllers;

use App\Outlet;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class Adminoutletcontroller extends Controller
{
    public function outlet(Request $request)
    {
        $outlets = Outlet::all();
        return view('admin/outlet.outlet', compact('outlets'));
    }

    public function create(Request $request)
    {
        outlet::create($request->all());
        Alert::success('Berhasil', 'Data Sudah BerhasilDitambahkan');
        return redirect('admin/outlet');
}
    public function edit($id)
    {
        $outlet = outlet::find($id);
        return view('admin/outlet.edit', compact('outlet'));
    }

    public function update(Request $request, $id)
    {
        $update = outlet::find($id);
        $update->update($request->all());
        Alert::success('Berhasil', 'Data Sudah Berhasil Diubah');
        return redirect('admin/outlet');
    }

    public function delete($id)
    {
        $delete = outlet::find($id);
        $delete->delete();
        Alert::success('Berhasil', 'Data Sudah Berhasil Dihapus');
        return redirect('admin/outlet');
    }
}
