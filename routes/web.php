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



Route::get('admin', function () { return view('admin.admin'); })->middleware('checkRole:admin');
Route::get('kasir', function () { return view('kasir.kasir'); })->middleware(['checkRole:kasir,admin']);
Route::get('owner', function () { return view('owner.owner'); })->middleware(['checkRole:owner,admin']);

Route::get('logout', function() {
    Auth::logout(); return redirect('/');
});
