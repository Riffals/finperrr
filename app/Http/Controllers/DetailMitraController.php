<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontrak;
use App\Models\DetailKontrak;
use App\Models\Transaksi;
use App\Models\Mitra;
use App\Models\VerifikasiPembayaran;
use Carbon\Carbon;
class DetailMitraController extends Controller
{
    public function index($id) {
        $data = Kontrak::join('detail kontrak','detail kontrak.kontrakID','kontrak.kontrakID')
        ->join('mitras','mitras.mitraID','kontrak.mitraID')
        ->where('kontrak.mitraID',$id)
        ->where('pelangganID',1)->first();
        $mitra = Mitra::where('mitraID',$id)->first();
        return view('detail',compact('id','data','mitra'));
    }

    public function kontrak(Request $request, $id)
    {
        $data = Kontrak::orderBy('kontrakID','DESC')->get();
        if($data->count() > 0){
            $kontrakID = $data[0]->kontrakID + 1;
        }else{
            $kontrakID = 1;
        }
        
        $data = VerifikasiPembayaran::orderBy('verifikasiPembayaranID','DESC')->get();
        if($data->count() > 0){
            $verifikasiPembayaranID = $data[0]->verifikasiPembayaranID + 1;
        }else{
            $verifikasiPembayaranID = 1;
        }

        $data = Transaksi::orderBy('transaksiID','DESC')->get();
        if($data->count() > 0){
            $transaksiID = $data[0]->transaksiID + 1;
        }else{
            $transaksiID = 1;
        }
        
        $data = DetailKontrak::orderBy('detailKontrakID','DESC')->get();
        if($data->count() > 0){
            $detailKontrakID = $data[0]->detailKontrakID + 1;
        }else{
            $detailKontrakID = 1;
        }

        VerifikasiPembayaran::create([
            'verifikasiPembayaranID' => $verifikasiPembayaranID,
            'transaksID' => $transaksiID,
            'persetujuan_pembayaran' => 0,
            'adminID' => '1'
        ]);
        
        $bukti = $request->file('bukti');
        $buktiPath = $bukti->store('bukti', 'public');
        Transaksi::create([
            'transaksiID' => $transaksiID,
            'totalPembayaran' => '5250000',
            'kontrakID' => $kontrakID,
            'statusPembayaran' => 0,
            'buktiPembayaran' => $buktiPath
        ]);

        Kontrak::create([
            'kontrakID' => $kontrakID,
            'pelangganID' => '1',
            'mitraID' => $id,
            'statusKontrak' => 0
        ]);

        DetailKontrak::create([
            'detailKontrakID' => $detailKontrakID,
            'kontrakID' => $kontrakID,
            'mulai' => Carbon::now(),
            'berakhir' => Carbon::now()->addMonths(2),
            'jamKerja' => $request->jam_kerja,
            'catatanKhusus' => $request->catatan
        ]);

        return redirect()->route('mitra.detail',$id);
    }

    public function terima($id) {
        $data = Transaksi::where('transaksiID',$id)->update(
            ['statusPembayaran' => 1]
        );
        $kontrak = Transaksi::where('transaksiID',$id)->first();
        $kontrakID = $kontrak->kontrakID;
        
        $data = Kontrak::where('kontrakID',$kontrakID)->update(
            ['statusKontrak' => 1]
        );

        $data = VerifikasiPembayaran::where('transaksID',$id)->update(
            ['persetujuan_pembayaran' => 1]
        );
        return redirect()->route('admin.index');
    }
    
    public function tolak($id) {
        $data = Transaksi::where('transaksiID',$id)->update(
            ['statusPembayaran' => 2]
        );
        $kontrak = Transaksi::where('transaksiID',$id)->first();
        $kontrakID = $kontrak->kontrakID;
        
        $data = Kontrak::where('kontrakID',$kontrakID)->update(
            ['statusKontrak' => 0]
        );

        $data = VerifikasiPembayaran::where('transaksID',$id)->update(
            ['persetujuan_pembayaran' => 2]
        );
        return redirect()->route('admin.index');
    }
}
