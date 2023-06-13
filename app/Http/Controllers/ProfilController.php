<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

// use Auth;

class ProfilController extends Controller
{
    /**
     * Show the update profile page.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() //nama metodd bebas
    {
    	return view('indexprofil');
    }

    public function buat()
    {
    	return view('buatprofil');
    }
        // untuk create, paksa isi akunID = 2
    public function proses_uploading(Request $request){
    $this->validate($request, [
        'fotoprofil' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        
    ]);

    // menyimpan data file yang diupload ke variabel $file
    $fotoprofil = $request->file('fotoprofil');

    $nama_file = time()."_".$fotoprofil->getClientOriginalName();

    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'data_file';
    $fotoprofil->move($tujuan_upload,$nama_file);

    Pelanggan::create([
        'akunID' => 2,
        'nama_pelanggan' => $request->nama,
        'lokasi_pelanggan' => $request->lokasi,
        'nomorHP_pelanggan' => $request->nomorhp,
        'fotoprofil' => $nama_file
        
    ]);

    return redirect('/admin/pelanggan/profilpelanggan');
	}

    // ambil data untuk progil sekrang
    public function indexedit() //nama metodd bebas
    {
        $pelanggan = DB::table('pelanggans')->where('pelangganID', 4)->get();
        return view('indexeditprofil',['pelanggan' => $pelanggan]);
    }

    public function edit() {
        return view('editprofil');
    }

//     public function update(Request $request)
//     {

//         // Dapatkan ID pelanggan yang diautentikasi saat ini
//         $pelangganID = auth()->user()->id;

//         // Dapatkan data pelanggan yang akan diperbarui
//         $pelanggan = Pelanggan::where('pelangganID', $pelangganID)->first();

//     // // Dapatkan ID pelanggan yang diautentikasi saat ini
//     // $pelangganID = auth()->guard('pelanggan')->user()->pelangganID;

//     // // Dapatkan data pelanggan yang akan diperbarui
//     // $pelanggan = Pelanggan::where('pelangganID', $pelangganID)->first();

//     // Validasi input
//     $validatedData = $request->validate([
//         'fotoprofil' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//         'nama' => 'required|string',
//         'lokasi' => 'required|string',
//         'nomorhp' => 'required|string',
//     ]);

//     // Simpan foto profil jika ada
//     if ($request->hasFile('fotoprofil')) {
//         $fotoProfil = $request->file('fotoprofil');
//         $namaFotoProfil = time() . '_' . $fotoProfil->getClientOriginalName();
//         $fotoProfil->move(public_path('path/to/upload/directory'), $namaFotoProfil);
//     }

//     // Perbarui nilai kolom-kolom yang diinginkan
//     $pelanggan->fotoprofil = $namaFotoProfil ?? $pelanggan->fotoprofil;
//     $pelanggan->nama_pelanggan = $request->input('nama');
//     $pelanggan->lokasi_pelanggan = $request->input('lokasi');
//     $pelanggan->nomorHP_pelanggan = $request->input('nomorhp');
//     $pelanggan->save();

//     // Redirect ke halaman profil pelanggan
//     return redirect('/admin/pelanggan/profilpelanggan');
// }


    public function update(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'fotoprofil' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string',
            'lokasi' => 'required|string',
            'nomorhp' => 'required|string',
        ]);

        // Simpan foto profil jika ada
        if ($request->hasFile('fotoprofil')) {
            $fotoProfil = $request->file('fotoprofil');
            $namaFotoProfil = time() . '_' . $fotoProfil->getClientOriginalName();
            $fotoProfil->move(public_path('path/to/upload/directory'), $namaFotoProfil);
        }

        // Dapatkan data pelanggan yang akan diperbarui
        $pelanggan = Pelanggan::where('pelangganID', 4)->first();

        // Perbarui nilai kolom-kolom yang diinginkan
        $pelanggan->fotoprofil = $namaFotoProfil ?? $pelanggan->fotoprofil;
        $pelanggan->nama_pelanggan = $request->input('nama');
        $pelanggan->lokasi_pelanggan = $request->input('lokasi');
        $pelanggan->nomorHP_pelanggan = $request->input('nomorhp');
        $pelanggan->save();

        // Redirect ke halaman profil pelanggan
        return redirect('/admin/pelanggan/profilpelanggan');
    }  

}