<?php

namespace App\Http\Controllers\Admin;

use App\Member;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Adminmembercontroller extends Controller
{
    public function member()
    {
        $members = Member::all();
        return view('admin/member/member', compact('members'));
    }

    public function create(Request $request)
    {
        Member::create($request->all());
        Alert::success('Berhasil', 'Member Sudah Berhasil Ditambahkan');
        return redirect('admin/member');
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('admin/member.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $member->update($request->all());
        Alert::success('Berhasil', 'Member Sudah Berhasil Di Update');
        return redirect('admin/member');
    }

    public function delete($id)

    {
        $member = Member::find($id);
        $member->delete();
        Alert::success('Berhasil', 'Member Sudah Berhasil Di Hapus');
        return redirect('admin/member');
    }
}