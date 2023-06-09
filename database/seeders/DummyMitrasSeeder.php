<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Mitra;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyMitrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $MitrasSeeder = [
            // data 1
            [
            'mitraID' => 1,
            'akunID' => 2,
            'nama_mitra' => 'Agus Subagus',
            'lokasi_mitra' => 'Surabaya',
            'nomorHP_mitra' => '087646790534',
            'gaji' => 50,
            'ppMitra' => 'mitra_1',
            'fotoktp' => 'mitra_ktp_1',
            'fotoskck' => 'mitra_skck_1',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // data 2
            [
            'mitraID' => 2,
            'akunID' => 2,
            'nama_mitra' => 'Ahmad Maulana',
            'lokasi_mitra' => 'Surabaya',
            'nomorHP_mitra' => '087493029465',
            'gaji' => 150,
            'ppMitra' => 'mitra_2',
            'fotoktp' => 'mitra_ktp_2',
            'fotoskck' => 'mitra_skck_2',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // data 3
            [
            'mitraID' => 3,
            'akunID' => 2,
            'nama_mitra' => 'Putri Aulia',
            'lokasi_mitra' => 'Sidoarjo',
            'nomorHP_mitra' => '088340571746',
            'gaji' => 75,
            'ppMitra' => 'mitra_3',
            'fotoktp' => 'mitra_ktp_3',
            'fotoskck' => 'mitra_skck_3',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // data 4
            [
            'mitraID' => 4,
            'akunID' => 2,
            'nama_mitra' => 'Rizky Pratama',
            'lokasi_mitra' => 'Gresik',
            'nomorHP_mitra' => '08739174655901',
            'gaji' => 93,
            'ppMitra' => 'mitra_4',
            'fotoktp' => 'mitra_ktp_4',
            'fotoskck' => 'mitra_skck_4',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // data 5
            [
            'mitraID' => 5,
            'akunID' => 2,
            'nama_mitra' => 'Dina Nurul',
            'lokasi_mitra' => 'Tuban',
            'nomorHP_mitra' => '087495620485',
            'gaji' => '57',
            'ppMitra' => 'mitra_5',
            'fotoktp' => 'mitra_ktp_5',
            'fotoskck' => 'mitra_skck_5',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // Data 6
            [
            'mitraID' => 6,
            'akunID' => 2,
            'nama_mitra' => 'Eko Prasetyo',
            'lokasi_mitra' => 'Yogyakarta',
            'nomorHP_mitra' => '081234567890',
            'gaji' => 89,
            'ppMitra' => 'mitra_6',
            'fotoktp' => 'mitra_ktp_6',
            'fotoskck' => 'mitra_skck_6',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // Data 7
            [
            'mitraID' => 7,
            'akunID' => 2,
            'nama_mitra' => 'Fita Sari',
            'lokasi_mitra' => 'Bandung',
            'nomorHP_mitra' => '085678901234',
            'gaji' => 79,
            'ppMitra' => 'mitra_7',
            'fotoktp' => 'mitra_ktp_7',
            'fotoskck' => 'mitra_skck_7',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // Data 8
            [
            'mitraID' => 8,
            'akunID' => 2,
            'nama_mitra' => 'Galih Saputra',
            'lokasi_mitra' => 'Semarang',
            'nomorHP_mitra' => '089012345678',
            'gaji' => 89,
            // 'ppMitra' => 'mitra_8',
            'ppMitra' => '',
            'fotoktp' => 'mitra_ktp_8',
            'fotoskck' => 'mitra_skck_8',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // Data 9
            [
            'mitraID' => 9,
            'akunID' => 2,
            'nama_mitra' => 'Hendra Setiawan',
            'lokasi_mitra' => 'Surakarta',
            'nomorHP_mitra' => '087654321098',
            'gaji' => 74,
            // 'ppMitra' => 'mitra_9',
            'ppMitra' => '',
            'fotoktp' => 'mitra_ktp_9',
            'fotoskck' => 'mitra_skck_9',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // Data 10
            [
            'mitraID' => 10,
            'akunID' => 2,
            'nama_mitra' => 'Indra Wijaya',
            'lokasi_mitra' => 'Malang',
            'nomorHP_mitra' => '081098765432',
            'gaji' => 38,
            // 'ppMitra' => 'mitra_10',
            'ppMitra' => '',
            'fotoktp' => 'mitra_ktp_10',
            'fotoskck' => 'mitra_skck_10',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // Data 11
            [
            'mitraID' => 11,
            'akunID' => 2,
            'nama_mitra' => 'Joko Santoso',
            'lokasi_mitra' => 'Solo',
            'nomorHP_mitra' => '085432109876',
            'gaji' => 74,
            // 'ppMitra' => 'mitra_11',
            'ppMitra' => '',
            'fotoktp' => 'mitra_ktp_11',
            'fotoskck' => 'mitra_skck_11',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // Data 12
            [
            'mitraID' => 12,
            'akunID' => 2,
            'nama_mitra' => 'Kurnia Putri',
            'lokasi_mitra' => 'Medan',
            'nomorHP_mitra' => '087654321090',
            'gaji' => 62,
            // 'ppMitra' => 'mitra_12',
            'ppMitra' => '',
            'fotoktp' => 'mitra_ktp_12',
            'fotoskck' => 'mitra_skck_12',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // Data 13
            [
            'mitraID' => 13,
            'akunID' => 2,
            'nama_mitra' => 'Lusi Anggraeni',
            'lokasi_mitra' => 'Pontianak',
            'nomorHP_mitra' => '082345678901',
            'gaji' => 36,
            // 'ppMitra' => 'mitra_13',
            'ppMitra' => '',
            'fotoktp' => 'mitra_ktp_13',
            'fotoskck' => 'mitra_skck_13',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // Data 14
            [
            'mitraID' => 14,
            'akunID' => 2,
            'nama_mitra' => 'Maulana Yusuf',
            'lokasi_mitra' => 'Bekasi',
            'nomorHP_mitra' => '089012345670',
            'gaji' => 74,
            // 'ppMitra' => 'mitra_14',
            'ppMitra' => '',
            'fotoktp' => 'mitra_ktp_14',
            'fotoskck' => 'mitra_skck_14',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // Data 15
            [
            'mitraID' => 15,
            'akunID' => 2,
            'nama_mitra' => 'Nanda Permata',
            'lokasi_mitra' => 'Denpasar',
            'nomorHP_mitra' => '081234567089',
            'gaji' => 21,
            // 'ppMitra' => 'mitra_15',
            'ppMitra' => '',
            'fotoktp' => 'mitra_ktp_15',
            'fotoskck' => 'mitra_skck_15',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // Data 16
            [
            'mitraID' => 16,
            'akunID' => 2,
            'nama_mitra' => 'Rudi Santoso',
            'lokasi_mitra' => 'Jakarta',
            'nomorHP_mitra' => '081234567090',
            'gaji' => 31,
            // 'ppMitra' => 'mitra_16',
            'ppMitra' => '',
            'fotoktp' => 'mitra_ktp_16',
            'fotoskck' => 'mitra_skck_16',
            'created_at' => $now,
            'updated_at' => $now,
            ],
            // Data 17
            [
            'mitraID' => 17,
            'akunID' => 2,
            'nama_mitra' => 'Lina Setiawati',
            'lokasi_mitra' => 'Bandung',
            'nomorHP_mitra' => '081234567091',
            'gaji' => 11,
            // 'ppMitra' => 'mitra_17',
            'ppMitra' => '',
            'fotoktp' => 'mitra_ktp_17',
            'fotoskck' => 'mitra_skck_17',
            'created_at' => $now,
            'updated_at' => $now,
            ],
        ];

        foreach ($MitrasSeeder as $val) {
            Mitra::create($val);
        }
    }
}
