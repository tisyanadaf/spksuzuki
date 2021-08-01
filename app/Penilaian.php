<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Penilaian extends Model
{
    private $table_karyawan;
    private $table_nilai;

    public function __construct()
    {
        $this->table_karyawan = 'tbl_karyawan';
        $this->table_nilai = 'tbl_nilai';
    }

    public function get_karyawan_all()
    {
        $result = DB::select("select K.id as id ,K.nik as nik, K.nama_lengkap as nama_lengkap, K.jabatan AS jabatan, 
        K.divisi AS divisi, K.tgl_masuk AS tgl_masuk, N.id_karyawan AS id_karyawan FROM $this->table_karyawan as K 
        LEFT JOIN $this->table_nilai AS N ON K.id = N.id_karyawan where K.role = 'karyawan'");
        return $result;
    }

    public function get_karyawan_by($targetColumn, $value)
    {
        $result = DB::select("select * from $this->table_karyawan where $targetColumn = '$value'");
        return $result;
    }

    public function get_nilai_by($targetColumn, $value)
    {
        $result = DB::select("select * from $this->table_nilai where $targetColumn = '$value'");
        return $result;
    }
}
