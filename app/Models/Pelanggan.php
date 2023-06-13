<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggans';
    protected $primaryKey = 'pelangganID';
    // public $timestamps = false;

    protected $fillable = ['pelangganID', 'akunID', 'nama_pelanggan', 'lokasi_pelanggan', 'nomorHP_pelanggan', 'fotoprofil'];
    // protected $pelanggan = 'pelangganID';




    public function akun()
    {
        return $this->belongsTo(Akun::class, 'akunID');
    }
}
