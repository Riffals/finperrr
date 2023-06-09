<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $table = 'mitras';
    protected $primaryKey = 'mitraID';
    public $timestamps = false;

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'akunID');
    }
}
