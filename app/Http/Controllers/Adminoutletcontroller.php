<?php

namespace App\Http\Controllers;

use App\Outlet;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class AdminOutletcontroller extends Controller
{
    public function outlet(Request $request)
    {
        $Outlets = Outlet::all();
        return view('admin/Outlet.Outlet', compact('Outlets'));
    }

    public function create(Request $request)
    {
        outlet::create($request->all());
        return redirect('admin/outlet');
    }
    public function edit($id)
    {
        $Outlets = outlet::find($id);
        return view('admin/outlet.edit', compact('Outlets'));
    }

    public function update(Request $request, $id)
    {
        $update = Outlet::find($id);
        $update->update($request->all());
        Alert::success('Berhasil', 'Data Sudah Berhasil Diubah');
        return redirect('admin/outlet');
    }

    public function delete($id)
    {
        $delete = Outlet::find($id);
        $delete->delete();
        Alert::success('Berhasil', 'Data Sudah Berhasil Dihapus');
        return redirect('admin/outlet');
    }
}
