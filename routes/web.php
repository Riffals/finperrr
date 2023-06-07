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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/students', [StudentController::class, 'index']);

// Route::get('/', function () {
//     return view('login_kresna');
// });

// Route::view('/', 'bergabung_sebagai');
// Route::view('/', 'dashboard_pelanggan');
// Route::view('/', 'laman_masuk');
// Route::view('/', 'laman_daftar');
// Route::view('/', 'landing_page');
// Route::get('/', [LamanDashboardPelangganController::class, 'index']);

// Route::view('/', 'laman_masuk');

// garap
Route::middleware(['guest'])->group(function()  {
    // Route::get('/', [SesiController::class, 'index'])->name('login');
    // Route::get('/', [SesiController::class, 'index']);
    // Route::post('/', [SesiController::class, 'login']);
    // // register
    // Route::get('/register', [SesiController::class, 'register']);
    // Route::get('/create', [SesiController::class, 'create']);

    // Login
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);

    // Register
    Route::get('/register', [SesiController::class, 'register'])->name('register');
    Route::post('/register', [SesiController::class, 'create'])->name('create');
    
    // Reset password
    Route::get('/reset-password', [SesiController::class, 'reset'])->name('reset');
    Route::post('/reset-password', [SesiController::class, 'update'])->name('update');
    // Route::get('/reset-password', [SesiController::class, 'reset'])->name('password.reset');
    // Route::post('/reset-password', [SesiController::class, 'update'])->name('password.update');
});

Route::get('/home', function(){
    return redirect('/admin');
});
 
// akunID 1=admin, 2=mitra, 3=pelanggan
Route::middleware(['auth'])->group(function()  {
    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware('userAkses:1');
    // Route::get('/admin/admin/{optional?}', [AdminController::class, 'admin'])->middleware('userAkses:1');

    Route::get('/admin/pelanggan', [AdminController::class, 'pelanggan'])->middleware('userAkses:2');
    Route::get('/admin/pelanggan/dashpel', [LamanDashboardPelangganController::class, 'index'])->middleware('userAkses:2');

    Route::get('/admin/mitra', [AdminController::class, 'mitra'])->middleware('userAkses:3');

    Route::get('/logout', [SesiController::class, 'logout']);
});


