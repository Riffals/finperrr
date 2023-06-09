<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
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

    Route::get('/admin/mitra', [AdminController::class, 'mitra'])->middleware('userAkses:3');

    Route::get('/logout', [SesiController::class, 'logout']);
});


