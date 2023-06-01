<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/', [LamanDashboardPelangganController::class, 'index']);
