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

    Route::get('member', 'Admin\Adminmembercontroller@member');
    Route::post('member/create', 'Admin\Adminmembercontroller@create');
    Route::get('member/{id}/edit', 'Admin\Adminmembercontroller@edit');
    Route::post('member/{id}/update', 'Admin\Adminmembercontroller@update');
    Route::get('member/{id}/delete', 'Admin\Adminmembercontroller@delete');
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
    Route::get('hakakses', 'Admin\Adminaksescontroller@HakAkses');
    // End manajement akses
});

// End Admin-member



// kasir member


<<<<<<< HEAD
// kasir member
Route::get('kasir/member', 'kasirmembercontroller@member');
Route::post('member/create', 'kasirmembercontroller@create');
Route::get('/member/{id}/edit', 'kasirmembercontroller@edit');
Route::post('/member/{id}/update', 'kasirmembercontroller@update');
Route::get('/member/{id}/delete', 'kasirmembercontroller@delete');

=======
>>>>>>> a709e90924165d9ec1598b7e1f73813e1f05975c
// end admin
Route::get('kasir', function () {
    return view('kasir.kasir');
})->middleware(['checkRole:kasir,admin']);


Route::prefix('kasir')->group(function () {
    Route::get('member', 'Kasir\kasirmembercontroller@member');
    Route::post('member/create', 'Kasir\kasirmembercontroller@create');
    Route::get('member/{id}/edit', 'Kasir\kasirmembercontroller@edit');
    Route::post('member/{id}/update', 'Kasir\kasirmembercontroller@update');
    Route::get('member/{id}/delete', 'Kasir\kasirmembercontroller@delete');
});



Route::get('owner', function () {
    return view('owner.owner');
})->middleware(['checkRole:owner,admin']);


Route::prefix('owner')->group(function () {

    Route::get('/transaksi/riwayat', 'Owner\Ownertransaksicontroller@transaksi')->name('owner');
});





Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});
