<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
class Adminaksescontroller extends Controller
{
    public function pengguna()
    {
        // User::create($request->all());
        $role = Role::all();
        return view('admin/manajementuser/pengguna', compact('role'));
    }
    public function HakAkses()
    {
        $users = User::all();
        $role  = Role::all();
        return view('admin/manajementuser/hakakses', compact('users','role'));
    }

    public function storeUser(Request $request)
    {
        // dd($request->all());
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole($request->role);
        return redirect()->back();

    }
}
