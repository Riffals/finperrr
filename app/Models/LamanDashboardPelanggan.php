<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LamanDashboardPelanggan extends Model
{
    use HasFactory;

    // protected $table = 'mitra';
    // protected $fillable = [
    //     'gambar'
    // ];

    // protected $fillable = ['nama_mitra', 'gaji', 'lokasi_mitra'];

    protected $appends = ['nama_mitra', 'gaji', 'lokasi_mitra'];


}
