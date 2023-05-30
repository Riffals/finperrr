<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use Illuminate\Http\Request;
// use App\Models\LamanDashboardPelanggan;

// ASLI
class LamanDashboardPelangganController extends Controller
{

    public function index(Request $request)
    {
        // Menangkap data pencarian
        $keyword = $request->keyword;
    
        // Mengambil data dari table mitra 
        $query = DB::table('mitra');
    
        // Melakukan pencarian data
        if ($request->has('keyword')) {
            $query->where('lokasi_mitra', 'like', "%" . $keyword . "%");
        }
        
        // mengurutkannya berdasarkan kolom 'gaji'
    
        // Mengurutkan data jika tombol "asc" ditekan
        if ($request->has('asc')) {
            $query->orderBy('gaji');
        }
    
        // Mengurutkan data jika tombol "desc" ditekan
        if ($request->has('desc')) {
            $query->orderBy('gaji', 'desc');
        }
    
        $pelanggan = $query->paginate(12);
    
        // Mengirim data pegawai ke view index
        return view('dashboard_pelanggan', [
            'pelangganList' => $pelanggan
        ]);
    }
}

    // public function index()
    // {
    //     $pelanggan = DB::table('mitra')->get();
    //     return view('dashboard_pelanggan', ['pelangganList' => $pelanggan]);
    // }

    // public function index(Request $request)
    // {
    //     $newName = '';

	// 	// menangkap data pencarian
	// 	$keyword = $request->keyword;
 
    //     // mengambil data dari table pegawai  sesuai pencarian data
	// 	$pelanggan = DB::table('mitra')
	// 	    ->where('lokasi_mitra','like',"%".$keyword."%")
    //         ->paginate(12);
 
    //     // mengirim data pegawai ke view index
	// 	return view('dashboard_pelanggan',['pelangganList' => $pelanggan]);
    // }

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
