<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'UserController@Index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// route admin
Route::get('admin', function () { return view('admin.admin'); })->middleware('checkRole:admin');

// Admin-product
Route::get('admin/Admin-product/product','Adminproductcontroller@product');
// End admin-product

// Admin-member
Route::get('admin/Admin-member/member','Adminmembercontroller@member');
// End Admin-member

// Admin-transaksi
Route::get('admin/Admin-transaksi/transaksi','Admintransaksicontroller@transaksi');
Route::get('admin/Admin-transaksi/listtransaksi','Admintransaksicontroller@list');
Route::get('admin/Admin-transaksi/riwayattransaksi','Admintransaksicontroller@riwayat');
Route::get('admin/Admin-transaksi/detailtransaksi','Admintransaksicontroller@detail');

// End transaksi

// outlet
Route::get('admin/Admin-outlet/outlet','Adminoutletcontroller@outlet');
// end outlet

// manajement akses
Route::get('admin/Admin-manajement/pengguna','Adminaksescontroller@pengguna');
Route::get('admin/Admin-manajement/hakakses','Adminaksescontroller@HakAkses');
// End manajement akses

// end admin
Route::get('kasir', function () { return view('kasir.kasir'); })->middleware(['checkRole:kasir,admin']);
Route::get('owner', function () { return view('owner.owner'); })->middleware(['checkRole:owner,admin']);

Route::get('logout', function() {
    Auth::logout(); return redirect('/');
});
