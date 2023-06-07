<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->akunID == '1') {
            return redirect('admin/admin');
        } elseif (Auth::user()->akunID == '2') {
            return redirect('admin/pelanggan');
        } elseif (Auth::user()->akunID == '3') {
            return redirect('admin/mitra');
        }
        // echo "Halo, Selamat Datang";
        // echo "<h1>".Auth::user()->email."</h1>";
        // echo "<a href='/logout'>LOGOUT >></a>";
        // echo "<a href='logout'>LOGOUT >></a>";
    }
    public function admin()
    {
        return view('dashboard_admin');
        // echo "Halo, ini adalah halaman admin";
        // echo "<h1>".Auth::user()->email."</h1>";
        // echo "<a href='/logout'>LOGOUT >></a>";
    }
    // public function mitra_asal($optional = null)
    // {
    // // Lakukan pengecekan parameter opsional di sini
    // if ($optional !== null) {
    //     return redirect('admin/admin');
    // }

    // // Logika dan pemrosesan lainnya
    // // ...

    // return view('dashboard_admin');
    // }
    public function pelanggan()
    {
        return redirect('/admin/pelanggan/dashpel');
        // return view('dashboard_pelanggan');
        // return Route::get('/', [LamanDashboardPelangganController::class, 'index']);
        // return app(LamanDashboardPelangganController::class);
        // echo "Halo, ini adalah halaman pelanggan";
        // echo "<h1>".Auth::user()->email."</h1>";
        // echo "<a href='/logout'>LOGOUT >></a>";
    }
    public function mitra()
    {
        return view('dashboard_mitra');
        // echo "Halo, ini adalah halaman mitra";
        // echo "<h1>".Auth::user()->email."</h1>";
        // echo "<a href='/logout'>LOGOUT >></a>";
    }
}