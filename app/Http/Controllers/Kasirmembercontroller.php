<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;

use App\Member;
use Illuminate\Http\Request;

class Kasirmembercontroller extends Controller
{
    public function member()
    {
        $members = Member::all();
        return view('kasir/member/member', compact('members'));
    }

    public function create(Request $request)
    {
        Member::create($request->all());
        Alert::success('Berhasil', 'Member Sudah Berhasil Ditambahkan');
        return redirect('kasir/member');
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('kasir/member.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $member->update($request->all());
        Alert::success('Berhasil', 'Member Sudah Berhasil Di Update');
        return redirect('kasir/member');
    }

    public function delete($id)

    {
        $member = Member::find($id);
        $member->delete();
        Alert::success('Berhasil', 'Member Sudah Berhasil Di Hapus');
        return redirect('kasir/member');
    }
}
