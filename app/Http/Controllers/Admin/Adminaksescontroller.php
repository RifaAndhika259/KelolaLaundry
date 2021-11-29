<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Adminaksescontroller extends Controller
{
    public function pengguna(Request $request)
    {
        User::create($request->all());
        return view('admin/manajementuser/pengguna');
    }
    public function HakAkses()
    {
        $users = User::all();
        return view('admin/manajementuser/hakakses', compact('users'));
    }
}
