<?php

use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\StatusController;

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
    return view('layouts.admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('adminx', function () {
    return view('layouts.admin');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/', function(){
        return redirect('home');
    });
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::resource('status', StatusController::class);
});
