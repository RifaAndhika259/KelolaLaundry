<?php

use App\Http\Controllers\Admin\Adminmembercontroller;
use Illuminate\Routing\RouteGroup;
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

Route::group(['prefix' => 'admin','middleware' => ['role:admin']], function () {
    Route::get('dashboard', 'Admin\Adminmembercontroller@index');
    Route::get('member', 'Admin\Adminmembercontroller@member');
    Route::post('member/create', 'Admin\Adminmembercontroller@create');
    Route::get('member/{id}/edit', 'Admin\Adminmembercontroller@edit');
    Route::post('member/{id}/update', 'Admin\Adminmembercontroller@update');
    Route::get('member/{id}/delete', 'Admin\Adminmembercontroller@delete');

    //menampilkan menu tong sampah
    Route::get('member/trash','Admin\Adminmembercontroller@trash');
    Route::get('member/kembalikan/{id}', 'Admin\Adminmembercontroller@kembalikan');
    Route::get('member/kembalikan_semua', 'Admin\Adminmembercontroller@kembalikan_semua');
    Route::get('member/hapus_permanen/{id}', 'Admin\Adminmembercontroller@hapus_permanen');
    Route::get('member/hapus_permanen_semua', 'Admin\Adminmembercontroller@hapus_permanen_semua');

    // Admin-transaksi
    Route::get('transaksi', 'Admin\Admintransaksicontroller@transaksi');
    Route::get('listtransaksi', 'Admin\Admintransaksicontroller@list');
    Route::get('riwayattransaksi', 'Admin\Admintransaksicontroller@riwayat');
    Route::get('transaksi/detailtransaksi', 'Admin\Admintransaksicontroller@detail');

    // End transaksi
    // Admin-product
    Route::get('product', 'Admin\Adminproductcontroller@product');
    Route::post('product/create', 'Admin\Adminproductcontroller@create');
    Route::get('{id}/edit', 'Admin\Adminproductcontroller@edit');
    Route::post('{id}/update', 'Admin\Adminproductcontroller@update');
    Route::get('{id}/delete', 'Admin\Adminproductcontroller@delete');
    // outlet
    Route::get('outlet', 'Admin\Adminoutletcontroller@outlet');
    Route::post('outlet/create', 'Admin\Adminoutletcontroller@create');
    Route::get('outlet/{id}/edit', 'Admin\Adminoutletcontroller@edit');
    Route::post('outlet/{id}/update', 'Admin\Adminoutletcontroller@update');
    Route::get('outlet/{id}/delete', 'Admin\Adminoutletcontroller@delete');
    // end outlet

    // manajement akses
    Route::get('pengguna', 'Admin\Adminaksescontroller@pengguna');
    Route::post('pengguna/post', 'Admin\Adminaksescontroller@storeUser');
    Route::get('hakakses', 'Admin\Adminaksescontroller@HakAkses');
    // End manajement akses

    Route::post('transaksi/post','Admin\Admintransaksicontroller@store');
});

// kasir
Route::group(['prefix' => 'kasir','middleware' => ['role:kasir']], function () {
    Route::get('dashboard','Kasir\kasirmembercontroller@index');
    Route::get('member', 'Kasir\kasirmembercontroller@member');
    Route::post('member/create', 'Kasir\kasirmembercontroller@create');
    Route::get('member/{id}/edit', 'Kasir\kasirmembercontroller@edit');
    Route::post('member/{id}/update', 'Kasir\kasirmembercontroller@update');
    Route::get('member/{id}/delete', 'Kasir\kasirmembercontroller@delete');
});



// owner
Route::group(['prefix' => 'owner','middleware' => ['role:owner']], function () {
    Route::get('dashboard', 'Owner\Ownertransaksicontroller@index');
    Route::get('/transaksi/riwayat', 'Owner\Ownertransaksicontroller@transaksi')->name('owner');
});


