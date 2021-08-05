<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_kriteria')->delete();
        DB::table('tbl_kriteria')->insert([
            [
                'id_aspek' => '1',
                'nama_kriteria' => 'Kualitas Kerja',
                'nilai_ideal' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_aspek' => '1',
                'nama_kriteria' => 'Kuantitas Kerja',
                'nilai_ideal' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_aspek' => '1',
                'nama_kriteria' => 'Disiplin Kerja',
                'nilai_ideal' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_aspek' => '1',
                'nama_kriteria' => 'Kerjasama',
                'nilai_ideal' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_aspek' => '2',
                'nama_kriteria' => 'Pengetahuan dan Keterampilan Kerja',
                'nilai_ideal' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_aspek' => '2',
                'nama_kriteria' => 'Minat Dalam Kerja',
                'nilai_ideal' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_aspek' => '2',
                'nama_kriteria' => 'Koordinasi atau Pendelegasian Tugas',
                'nilai_ideal' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_aspek' => '3',
                'nama_kriteria' => 'Teknik Mengatasi Masalal yang Timbul',
                'nilai_ideal' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_aspek' => '3',
                'nama_kriteria' => 'Kemampuan Berkomunikasi',
                'nilai_ideal' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_aspek' => '3',
                'nama_kriteria' => 'Penyesuaian Diri',
                'nilai_ideal' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
