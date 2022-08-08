<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\HalloController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('adminx', function () {
    return view('layouts.admin');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return redirect('home');
    });
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::resource('status', StatusController::class);
    Route::resource('laporan', LaporanController::class);
    Route::resource('akun', AkunController::class);
    Route::post('laporan/detail/', [LaporanController::class, 'postJoin'])->name('laporan.postJoin');
});
