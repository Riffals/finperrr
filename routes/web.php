<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminkuController;
use App\Http\Controllers\DetailMitraController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\LamanDashboardPelangganController;

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

// garap
Route::middleware(['guest'])->group(function()  {
    // Landing page
    Route::get('/', [SesiController::class, 'landing_page'])->name('landing_page');

    // Login
    Route::get('/login', [SesiController::class, 'login'])->name('login');
    Route::post('/login', [SesiController::class, 'masuk']);

    // Register
    Route::get('/register', [SesiController::class, 'bergseb'])->name('bergseb');
    Route::get('/registers', [SesiController::class, 'registers'])->name('registers');
    Route::post('/registers', [SesiController::class, 'create'])->name('create');
    
    // Reset password
    Route::get('/reset-password', [SesiController::class, 'reset'])->name('reset');
    Route::post('/reset-password', [SesiController::class, 'update'])->name('update');
});

Route::get('/home', function(){
    return redirect('/admin');
});
 
// akunID 1=admin, 2=pelanggan, 3=mitra
Route::middleware(['auth'])->group(function()  {
    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware('userAkses:1');

    Route::get('/admin/pelanggan', [AdminController::class, 'pelanggan'])->middleware('userAkses:2');
    Route::get('/admin/pelanggan/dashpel', [LamanDashboardPelangganController::class, 'index'])->middleware('userAkses:2');
    // kresna
    // Route::get('/admin/pelanggan/admin', [AdminController::class, 'index'])->middleware('userAkses:2');
    Route::get('/admin/pelanggan/profil', [\App\Http\Controllers\ProfilController::class, 'index'])->middleware('userAkses:2');
    Route::get('/admin/pelanggan/profil/buat', [\App\Http\Controllers\ProfilController::class, 'buat'])->middleware('userAkses:2');
    // Route::post('/admin/pelanggan/profil/buat', [\App\Http\Controllers\ProfilController::class, 'uploading'])->middleware('userAkses:2');
    // Route::post('/admin/pelanggan/profil/store', [\App\Http\Controllers\ProfilController::class, 'store'])->middleware('userAkses:2');
    Route::post('/admin/pelanggan/profil/buat', [\App\Http\Controllers\ProfilController::class, 'proses_uploading'])->middleware('userAkses:2');
    Route::get('/admin/pelanggan/profilpelanggan', [\App\Http\Controllers\ProfilController::class, 'indexedit'])->middleware('userAkses:2');
    Route::get('/admin/pelanggan/profilpelanggan/edit', [\App\Http\Controllers\ProfilController::class, 'edit'])->middleware('userAkses:2');
    Route::post('/admin/pelanggan/profilpelanggan/edit', [\App\Http\Controllers\ProfilController::class, 'update'])->middleware('userAkses:2');
    // punya rafli
    // Route::get('/',[HomeController::class,'index'])->name('index');

    Route::get('/admin/pelanggan/detailmitra',[DetailMitraController::class,'index'])->name('mitra.detail')->middleware('userAkses:2');
    
    // Route::get('/admin/pelanggan/detailmitra/{id}',[DetailMitraController::class,'index'])->name('mitra.detail')->middleware('userAkses:2');
    // Route::get('/admin/pelanggan/admin',[AdminloController::class,'index'])->name('admin.index')->middleware('userAkses:2');
    // Route::post('/admin/pelanggan/kontrak/{id}',[DetailMitraController::class,'kontrak'])->name('mitra.kontrak')->middleware('userAkses:2');
    // Route::get('/admin/pelanggan/terima/{id}',[DetailMitraController::class,'terima'])->name('terima.pembayaran')->middleware('userAkses:2');
    // Route::get('/admin/pelanggan/tolak/{id}',[DetailMitraController::class,'tolak'])->name('tolak.pembayaran')->middleware('userAkses:2');
    
     
    Route::get('/admin/mitra', [AdminController::class, 'mitra'])->middleware('userAkses:3');

    Route::get('/logout', [SesiController::class, 'logout']);
    
});
