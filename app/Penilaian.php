<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Penilaian extends Model
{
    private $table_nilai;
    private $table_kriteria;

    public function __construct()
    {
        $this->table_nilai = 'tbl_nilai';
        $this->table_kriteria = 'tbl_kriteria';
    }

    public function get_nilai_by($targetColumn, $value)
    {
        $result = DB::select("select * from $this->table_nilai where $targetColumn = '$value'");
        return $result;
    }

    public function get_all_kriteria()
    {
        $result = DB::select("select * from $this->table_kriteria");
        return $result;
    }

    public function FunctionName(Object $values)
    {

    }
}
