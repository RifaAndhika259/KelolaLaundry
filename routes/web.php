<?php

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


// route admin
Route::get('admin', function () {
    return view('admin.admin');
})->middleware('checkRole:admin');

// Admin-member
Route::prefix('admin')->group(function () {

    Route::get('member', 'Adminmembercontroller@member');
    Route::post('member/create', 'Adminmembercontroller@create');
    Route::get('member/{id}/edit', 'Adminmembercontroller@edit');
    Route::post('member/{id}/update', 'Adminmembercontroller@update');
    Route::get('member/{id}/delete', 'Adminmembercontroller@delete');
    // Admin-transaksi
    Route::get('transaksi', 'Admintransaksicontroller@transaksi');
    Route::get('listtransaksi', 'Admintransaksicontroller@list');
    Route::get('riwayattransaksi', 'Admintransaksicontroller@riwayat');
    Route::get('transaksi/detailtransaksi', 'Admintransaksicontroller@detail');

    // End transaksi
    // Admin-product
    Route::get('product', 'Adminproductcontroller@product');
    Route::post('product/create', 'Adminproductcontroller@create');
    Route::get('{id}/edit', 'Adminproductcontroller@edit');
    Route::post('{id}/update', 'Adminproductcontroller@update');
    Route::get('{id}/delete', 'Adminproductcontroller@delete');
    // outlet
    Route::get('outlet', 'Adminoutletcontroller@outlet');
    Route::post('outlet/create', 'Adminoutletcontroller@create');
    Route::get('outlet/{id}/edit', 'Adminoutletcontroller@edit');
    Route::post('outlet/{id}/update', 'Adminoutletcontroller@update');
    Route::get('outlet/{id}/delete', 'Adminoutletcontroller@delete');
    // end outlet

    // manajement akses
    Route::get('pengguna', 'Adminaksescontroller@pengguna');
    Route::get('hakakses', 'Adminaksescontroller@HakAkses');
    // End manajement akses
});

// End Admin-member



// kasir member


// end admin
Route::get('kasir', function () {
    return view('kasir.kasir');
})->middleware(['checkRole:kasir,admin']);


Route::prefix('kasir')->group(function () {
    Route::get('member', 'kasirmembercontroller@member');
    Route::post('member/create', 'kasirmembercontroller@create');
    Route::get('member/{id}/edit', 'kasirmembercontroller@edit');
    Route::post('member/{id}/update', 'kasirmembercontroller@update');
    Route::get('member/{id}/delete', 'kasirmembercontroller@delete');
});



Route::get('owner', function () {
    return view('owner.owner');
})->middleware(['checkRole:owner,admin']);


Route::prefix('owner')->group(function () {

    Route::get('/transaksi/riwayat', 'Ownertransaksicontroller@transaksi')->name('owner');
});





Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});
