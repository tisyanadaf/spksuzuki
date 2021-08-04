<?php

use Illuminate\Database\Seeder;

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
        ]);
    }
}
