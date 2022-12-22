<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BarangController;
use App\Http\Controllers\Backend\KuliahController;




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

// contoh pemanggilan GET
Route::get('/mahasiswa', function () {
     return "<h1> SAYA MAHASISWA POLIWANGI</h1>";
}); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// route untuk user

Route::prefix('users')->group(function () {
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
});

// Route untuk barang
Route::prefix('barangs')->group(function () {
    Route::get('/view', [BarangController::class, 'BarangView'])->name('barang.view');
    Route::get('/add', [BarangController::class, 'BarangAdd'])->name('barang.add');
    Route::post('/store', [BarangController::class, 'BarangRequest'])->name('barang.request');
    Route::get('/edit/{id}', [BarangController::class, 'BarangEdit'])->name('barang.edit');
    Route::post('/update/{id}', [BarangController::class, 'BarangUpdate'])->name('barang.update');
    Route::get('/delete/{id}', [BarangController::class, 'BarangDelete'])->name('barang.delete');
});

//Route untuk Kuliah
Route::prefix('kuliahs')->group(function () {
    Route::get('/view', [KuliahController::class, 'KuliahView'])->name('kuliah.view');
    Route::get('/add', [KuliahController::class, 'KuliahAdd'])->name('kuliah.add');
    Route::post('/store', [KuliahController::class, 'KuliahRequest'])->name('kuliah.request');
});