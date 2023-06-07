<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\ListAkun;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummmyListAkunsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $listakuns = [
            [
                'akunID' => 1,
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1'),
                'created_at' => $now,
                'updated_at' => $now,
                
            ],
            [
                'akunID' => 2,
                'email' => 'budi@gmail.com',
                'password' => bcrypt('1'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'akunID' => 2,
                'email' => 'cahyo@gmail.com',
                'password' => bcrypt('1'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'akunID' => 3,
                'email' => 'deni@gmail.com',
                'password' => bcrypt('1'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'akunID' => 3,
                'email' => 'eko@gmail.com',
                'password' => bcrypt('1'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        foreach ($listakuns as $val) {
            ListAkun::create($val);
        }
    }
}
