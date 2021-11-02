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
        $data = Outlet::create([
            'name' => $request->name,
            'address' => $request->address,
            'telephone' => $request->telephone,
        ]);

        // dd($data);

        Alert::success('Berhasil', 'Data Sudah BerhasilDitambahkan');
        return redirect('admin/outlet');
    }
    public function edit($id)
    {
        $Outlet = Outlet::find($id);
        return view('admin/Outlet.edit', compact('Outlet'));
    }

    public function update(Request $request, $id)
    {
        $update = Outlet::find($id);
        $update->update($request->all());
        Alert::success('Berhasil', 'Data Sudah Berhasil Diubah');
        return redirect('admin/Outlet');
    }

    public function delete($id)
    {
        $delete = Outlet::find($id);
        $delete->delete();
        Alert::success('Berhasil', 'Data Sudah Berhasil Dihapus');
        return redirect('admin/Outlet');
    }
}
