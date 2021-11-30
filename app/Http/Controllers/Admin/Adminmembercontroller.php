<?php

namespace App\Http\Controllers\Admin;

use App\Member;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class Adminmembercontroller extends Controller
{

    public function index()
    {
        return view('admin.admin');
    }

    public function member()
    {
        $members = Member::all();
        return view('admin/member/member', compact('members'));
    }

    public function create(Request $request)
    {
        $cek = Member::whereEmail($request->input('email'))->first();
        if($cek){
            Alert::error('Gagal', 'Data Email Sudah Tersedia');
            return back();
        }
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
        // $validate = Member::whereEmail($request->input('email'))->first()->
        // if($validate){
        //     Alert::error('Gagal', 'Data Email Sudah tersedia');
        //     return back();
        // }
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

    public function trash()
    {
        $member = member::onlyTrashed()->get();
        return view('admin.member.trash',compact('member'));
    }

    public function kembalikan($id)
    {
        $member = member::onlyTrashed()->where('id',$id);
        $member->restore();
        return redirect('admin/member/trash');
    }

    public function kembalikan_semua()
    {
        $member = member::onlyTrashed();
        $member->restore();

        return redirect('admin/member/trash');
    }

    public function hapus_permanen($id)
    {
        $member = member::onlyTrashed()->where('id',$id);
        $member->forceDelete();

        return redirect('admin/member/trash');
    }

    public function hapus_permanen_semua()
    {
        $member = member::onlyTrashed();
        $member->forceDelete();

        return redirect('admin/member/trash');
    }
}
