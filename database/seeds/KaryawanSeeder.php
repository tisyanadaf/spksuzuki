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
                'jabatan' => 'Kepala Cabang',
                'username' => 'tangguh',
                'password' => '$2y$10$r3uZ8j/QdkpkrAylOyIOVupQ1ywm4UxiO6iNFe03WRLMKosaJTkFS',
                'role' => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nik' => '987654321',
                'nama_lengkap' => 'Tisya Nada Fitriana',
                'tgl_masuk' => '2021-05-01',
                'divisi' => 'penjualan',
                'jabatan' => 'Karyawan',
                'username' => null,
                'password' => null,
                'role' => 'karyawan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
