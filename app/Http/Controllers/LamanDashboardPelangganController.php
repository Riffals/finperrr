<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use Illuminate\Http\Request;
// use App\Models\LamanDashboardPelanggan;

class LamanDashboardPelangganController extends Controller
{
    // public function index()
    // {
    //     $pelanggan = DB::table('mitra')->get();
    //     return view('dashboard_pelanggan', ['pelangganList' => $pelanggan]);
    // }

    public function index(Request $request)
    {
		// menangkap data pencarian
		$keyword = $request->keyword;
 
        // mengambil data dari table pegawai  sesuai pencarian data
		$pelanggan = DB::table('mitra')
		    ->where('lokasi_mitra','like',"%".$keyword."%")
            ->get();
 
        // mengirim data pegawai ke view index
		return view('dashboard_pelanggan',['pelangganList' => $pelanggan]);
    }

    // public function searchmitra(Request $request)
	// {
	// 	// menangkap data pencarian
	// 	$cari = $request->cari;
 
    //     // mengambil data dari table pegawai sesuai pencarian data
	// 	$pelanggan = DB::table('mitra')
	// 	    ->where('lokasi_mitra','like',"%".$cari."%");
 
    //     // mengirim data pegawai ke view index
	// 	return view('dashboard_pelanggan',['pegawai' => $pelanggan]);
 
	// }
}