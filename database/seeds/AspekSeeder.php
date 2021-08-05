<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AspekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_aspek')->delete();
        DB::table('tbl_aspek')->insert([
            [
                'nama_aspek' => 'Evaluasi',
                'cf_persen' => 0.6,
                'sf_persen' => 0.4,
                'bobot_persen' => 0.5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_aspek' => 'Intelektual',
                'cf_persen' => 0.6,
                'sf_persen' => 0.4,
                'bobot_persen' => 0.2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_aspek' => 'Softskill',
                'cf_persen' => 0.6,
                'sf_persen' => 0.4,
                'bobot_persen' => 0.3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
