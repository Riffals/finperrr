<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LamanDashboardPelangganController extends Controller
{
    public function index(Request $request)
    {
        // Menangkap data pencarian
        $keyword = $request->input('keyword');

        // Mengambil data dari tabel 'mitra'
        $query = DB::table('mitras');

        // Melakukan pencarian data
        if ($keyword) {
            $query->where('lokasi_mitra', 'like', '%' . $keyword . '%');
        }
        
        // Mengurutkan data jika tombol "asc" ditekan
        if ($request->has('asc')) {
            $query->orderBy('gaji');
        }
    
        // Mengurutkan data jika tombol "desc" ditekan
        if ($request->has('desc')) {
            $query->orderBy('gaji', 'desc');
        }

        $pelanggan = $query->paginate(12);
        $errorMessage = ''; // Inisialisasi variabel $errorMessage

        // Cek apakah hasil pencarian kosong
        if ($keyword && $pelanggan->isEmpty()) {
        // $errorMessage = 'Data tidak ditemukan untuk kata kunci: ' . $keyword;
        $errorMessage = 'Lokasi mitra ' . $keyword . ' tidak dapat ditemukan';
        }

        // 
        // $listAkunID = $request->query('listakuns');
        // $prt = Mitra::findOrFail($id);

        // Mengirim data pelanggan ke view dashboard_pelanggan
        return view('dashboard_pelanggan', [
            'pelangganList' => $pelanggan,
            'errorMessage' => $errorMessage,
        ]);
        }
}
