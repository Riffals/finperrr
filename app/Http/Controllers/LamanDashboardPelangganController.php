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

    // chat gpt_2
//     public function index(Request $request)
// {
//     $newName = '';

//     // Menangkap data pencarian
//     $keyword = $request->keyword;

//     // Mengambil data dari table mitra 
//     $query = DB::table('mitra');

//     // Mengurutkan data berdasarkan kolom 'gaji' jika ada permintaan pengurutan
//     $query->when($request->has('asc'), function ($query) {
//         return $query->orderBy('gaji');
//     });

//     $query->when($request->has('desc'), function ($query) {
//         return $query->orderBy('gaji', 'desc');
//     });

//     // Melakukan pencarian data
//     if ($request->has('keyword')) {
//         $query->where('lokasi_mitra', 'like', "%" . $keyword . "%");
//     }

//     $pelanggan = $query->get();

//     // Mengirim data pegawai ke view index
//     return view('dashboard_pelanggan', ['pelangganList' => $pelanggan]);
// }

    // fungsi buatan gpt 
    public function index(Request $request)
{
    $newName = '';

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

    // Menambahkan parameter urutan ke URL saat pindah halaman
    $pelanggan->appends($request->except('page'));

    
    // Menambahkan parameter pencarian dan urutan ke URL saat pindah halaman
    // $pelanggan->appends(['keyword' => $keyword, 'asc' => $request->asc, 'desc' => $request->desc]);

    // Mengirim data pegawai ke view index
    return view('dashboard_pelanggan', ['pelangganList' => $pelanggan, ]);
}

    // fungsi asli 
    // public function index(Request $request)
    // {
    //     $newName = '';

	// 	// menangkap data pencarian
	// 	$keyword = $request->keyword;
	// 	// $asc = $request->asc;
	// 	// $desc = $request->desc;
 
    //     // mengambil data dari table pegawai  sesuai pencarian data
	// 	$pelanggan = DB::table('mitra')
	// 	    ->where('lokasi_mitra','like',"%".$keyword."%")
    //         //ascending
    //         // ->sortBy('gaji', [], true, $desc) // true for descending
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
}
