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
Route::get('admin', function () {
    return view('admin.admin');
})->middleware('checkRole:admin');

// Admin-product
Route::get('admin/product', 'Adminproductcontroller@product');
Route::post('product/create', 'Adminproductcontroller@create');
Route::get('/admin/{id}/edit', 'Adminproductcontroller@edit');
Route::post('/admin/{id}/update', 'Adminproductcontroller@update');
Route::get('/admin/{id}/delete', 'Adminproductcontroller@delete');

// End admin-product

// Admin-member
Route::get('admin/member', 'Adminmembercontroller@member');
Route::post('member/create', 'Adminmembercontroller@create');
Route::get('/member/{id}/edit', 'Adminmembercontroller@edit');
Route::post('/member/{id}/update', 'Adminmembercontroller@update');
Route::get('/member/{id}/delete', 'Adminmembercontroller@delete');

// End Admin-member

// Admin-transaksi
Route::get('admin/transaksi', 'Admintransaksicontroller@transaksi');
Route::get('admin/listtransaksi', 'Admintransaksicontroller@list');
Route::get('admin/riwayattransaksi', 'Admintransaksicontroller@riwayat');
Route::get('admin/transaksi/detailtransaksi', 'Admintransaksicontroller@detail');

// End transaksi

// outlet
Route::get('admin/outlet', 'Adminoutletcontroller@outlet');
Route::post('outlet/create', 'Adminoutletcontroller@create');
Route::get('/admin/{id}/edit', 'Adminoutletcontroller@edit');
Route::post('/admin/{id}/update', 'Adminoutletcontroller@update');
Route::get('/admin/{id}/delete', 'Adminoutletcontroller@delete');
// end outlet

// manajement akses
Route::get('admin/pengguna', 'Adminaksescontroller@pengguna');
Route::get('admin/hakakses', 'Adminaksescontroller@HakAkses');
// End manajement akses

// kasir member
Route::get('kasir/member', 'kasirmembercontroller@member');
Route::post('member/create', 'kasirmembercontroller@create');
Route::get('/member/{id}/edit', 'kasirmembercontroller@edit');
Route::post('/member/{id}/update', 'kasirmembercontroller@update');
Route::get('/member/{id}/delete', 'kasirmembercontroller@delete');
// end admin
Route::get('kasir', function () {
    return view('kasir.kasir');
})->middleware(['checkRole:kasir,admin']);
Route::get('owner', function () {
    return view('owner.owner');
})->middleware(['checkRole:owner,admin']);

Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});
