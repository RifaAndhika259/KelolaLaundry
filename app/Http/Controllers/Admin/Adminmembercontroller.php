<?php

namespace App\Http\Controllers\Admin;

use App\Member;
use RealRashid\SweetAlert\Facades\Alert;
<<<<<<< HEAD:app/Http/Controllers/Adminmembercontroller.php

=======
use App\Http\Controllers\Controller;
use App\Member;
>>>>>>> a709e90924165d9ec1598b7e1f73813e1f05975c:app/Http/Controllers/Admin/Adminmembercontroller.php
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
