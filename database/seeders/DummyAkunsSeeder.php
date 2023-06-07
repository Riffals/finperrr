<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Akun;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyAkunsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $akuns = [
            [
                'tipeAkun' => 'admin',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'tipeAkun' => 'pelanggan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'tipeAkun' => 'mitra',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        foreach ($akuns as $val) {
            Akun::create($val);
        }
    }
}
