<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Penilaian extends Model
{
    private $table_nilai;
    private $table_nilai_hasil;
    private $table_cf_sf;

    public function __construct()
    {
        $this->table_nilai = 'tbl_nilai';
        $this->table_nilai_hasil = 'tbl_nilai_hasil';
        $this->table_cf_sf = 'tbl_nilai_cf_sf';
    }

    public function get_nilai_kriteria_by($targetColumn, $value)
    {
        $result = DB::select("select nilai from $this->table_nilai where $targetColumn = '$value'");
        return $result;
    }

    public function get_nilai_hasil_by($targetColumn, $value)
    {
        $result = DB::select("select * from $this->table_nilai_hasil where $targetColumn = '$value'");
        return $result;
    }

    public function insert_nilai_hasil(Object $values)
    {
        $result = DB::insert("insert into $this->table_nilai_hasil 
        (id_karyawan, nilai_akhir, notes, kesimpulan, created_at, updated_at) 
        values ('$values->id_karyawan', '$values->nilai_akhir', '$values->notes', '$values->kesimpulan', '$values->created_at', '$values->updated_at')");
        return $result;
    }

    public function insert_nilai(Object $values)
    {
        $nilai = $values->nilai;
        for ($ii = 1; $ii < 11; $ii++) {
            DB::insert("insert into $this->table_nilai 
            (id_kriteria, id_karyawan, nilai, created_at, updated_at) 
            values ('$ii', '$values->id_karyawan', '$nilai[$ii]', '$values->created_at', '$values->updated_at')");
        }
        return "11 rows effected";
    }

    public function insert_nilai_cf_sf(Object $values)
    {
        $nilai_cf = $values->nilai_cf;
        $nilai_sf = $values->nilai_sf;
        $nilai_total = $values->nilai_total;
        for ($ii = 1; $ii < 4; $ii++) {
            DB::insert("insert into $this->table_cf_sf 
            (id_karyawan, id_aspek, nilai_cf, nilai_sf, nilai_total, created_at, updated_at) 
            values ('$values->id_karyawan', '$ii', '$nilai_cf[$ii]', '$nilai_sf[$ii]', '$nilai_total[$ii]', '$values->created_at', '$values->updated_at')");
        }
        return "4 rows effected";
    }
}
