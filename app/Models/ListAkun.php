<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ListAkun extends Authenticatable 
{
    use HasFactory;
    
    protected $table = 'listakuns';
    protected $primaryKey = 'listAkunID';
    // public $timestamps = false;
    use HasTimestamps;

    // protected $passwordAttribute = 'katasandi';

    protected $fillable = [
        'akunID',
        'email',
        'password',

    ];

    protected $hidden = [
        'password',
    ];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'akunID');
    }
}
