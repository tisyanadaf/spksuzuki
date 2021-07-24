<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Karyawan extends Model
{
    private $table_name;

    public function __construct()
    {
        $this->table_name = 'tbl_karyawan';
    }

    public function get_data($username)
    {
        # code...
        $result = DB::select("select * from $this->table_name where username = ?", [$username]);
        return $result;
    }
}
