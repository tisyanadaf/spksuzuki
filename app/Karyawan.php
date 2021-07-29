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

    public function get_all($role = 'karyawan')
    {
        if ($role === 'karyawan'){
            $result = DB::select("select * from $this->table_name where role='$role'");
        } else {
            $result = DB::select("select * from $this->table_name where role='$role'");
        }
       
        return $result;
    }

    public function get_data_by($targetColumn, $value, $role = 'karyawan')
    {
        if ($role === 'karyawan') {
            $result = DB::select("select * from $this->table_name where $targetColumn = '$value' and role='$role'");
        } else {
            $result = DB::select("select * from $this->table_name where $targetColumn = '$value' and role='$role'");
        }
        return $result;
    }

    public function insert_data(Object $values, $role = 'karyawan')
    {
        if ($role === 'karyawan') {
            // Create without username and password
            $result = DB::insert("insert into $this->table_name 
            (nik, nama_lengkap, tgl_masuk, divisi, jabatan, role, created_at, updated_at) 
            values ('$values->nik', '$values->nama_lengkap', '$values->tgl_masuk', '$values->divisi', '$values->jabatan', '$role', '$values->created_at', '$values->updated_at')");
            return $result;
        } else {
            // Create with username and password
            $result = DB::insert("insert into $this->table_name 
            (nik, nama_lengkap, tgl_masuk, divisi, jabatan, username, password, role, created_at, updated_at) 
            values ('$values->nik', '$values->nama_lengkap', '$values->tgl_masuk', '$values->divisi', '$values->jabatan', '$values->username', '$values->password', '$role','$values->created_at', '$values->updated_at')");
            return $result;
        }
    }

    public function update_data(Object $values, $id, $role = 'karyawan')
    {
        if ($role === 'karyawan') {
            // Update without username and password
            $result = DB::update("update $this->table_name set nik = '$values->nik', nama_lengkap = '$values->nama_lengkap',
            tgl_masuk = '$values->tgl_masuk', divisi = '$values->divisi', jabatan = '$values->jabatan', role = '$role', updated_at = '$values->updated_at'  where id = '$id'");
            return $result;
        } else {
            // Update with username and password
            $result = DB::update("update $this->table_name set nik = '$values->nik', nama_lengkap = '$values->nama_lengkap',
            tgl_masuk = '$values->tgl_masuk', divisi = '$values->divisi', jabatan = '$values->jabatan', username = '$values->username',
            password = '$values->password', role = '$role', updated_at = '$values->updated_at'  where id = '$id'");
            return $result;
        }
    }

    public function delete_data($id)
    {
        $result = DB::delete("delete from $this->table_name where id = $id");
        return $result;
    }
}
