<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    
    protected $table = 'akuns';
    protected $primaryKey = 'akunID';
    public $timestamps = false;

    protected $fillable = [
        'tipeAkun'
    ];

    public function admin()
    {
        return $this->hasOne(Admin::class, 'akunID');
    }

    public function listakuns()
    {
        return $this->hasMany(ListAkun::class, 'akunID');
    }

    public function pelanggan()
    {
        return $this->hasOne(Pelanggan::class, 'akunID');
    }

    public function mitra()
    {
        return $this->hasOne(Mitra::class, 'akunID');
    }
}
