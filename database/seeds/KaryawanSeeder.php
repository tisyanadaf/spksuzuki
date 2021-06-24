<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_karyawan')->delete();
        DB::table('tbl_karyawan')->insert([
            [
                'nik' => '12345678',
                'nama_lengkap' => 'Tangguh Destio Pramono',
                'tgl_masuk' => '2021-05-01',
                'divisi' => 'penjualan',
                'jabatan' => 'Sekretaris',
                'username' => 'tangguh',
                'password' => 'admin123',
                'role' => 'kepala_cabang',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

    }
}
