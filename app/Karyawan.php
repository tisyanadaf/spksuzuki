<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Karyawan extends Model
{
    private $table_karyawan;
    private $table_nilai_hasil;

    public function __construct()
    {
        $this->table_karyawan = 'tbl_karyawan';
        $this->table_nilai_hasil = 'tbl_nilai_hasil';
    }

    public function get_all($role = 'karyawan')
    {
        if ($role === 'karyawan') {
            $result = DB::select("select * from $this->table_karyawan where role='$role'");
        } else {
            $result = DB::select("select * from $this->table_karyawan where role='$role'");
        }

        return $result;
    }

    public function get_karyawan_with_nilai()
    {
        $result = DB::select("select K.id as id ,K.nik as nik, K.nama_lengkap as nama_lengkap, K.jabatan AS jabatan, 
        K.divisi AS divisi, K.tgl_masuk AS tgl_masuk, N.id_karyawan AS id_karyawan FROM $this->table_karyawan as K 
        LEFT JOIN $this->table_nilai_hasil AS N ON K.id = N.id_karyawan where K.role = 'karyawan'");
        return $result;
    }

    public function get_data_by($targetColumn, $value, $role = 'karyawan')
    {
        if ($role === 'karyawan') {
            $result = DB::select("select * from $this->table_karyawan where $targetColumn = '$value' and role='$role'");
        } else {
            $result = DB::select("select * from $this->table_karyawan where $targetColumn = '$value' and role='$role'");
        }
        return $result;
    }

    public function insert_data(Object $values, $role = 'karyawan')
    {
        if ($role === 'karyawan') {
            // Create without username and password
            $result = DB::insert("insert into $this->table_karyawan 
            (nik, nama_lengkap, tgl_masuk, divisi, jabatan, role, created_at, updated_at) 
            values ('$values->nik', '$values->nama_lengkap', '$values->tgl_masuk', '$values->divisi', '$values->jabatan', '$role', '$values->created_at', '$values->updated_at')");
            return $result;
        } else {
            // Create with username and password
            $result = DB::insert("insert into $this->table_karyawan 
            (nik, nama_lengkap, tgl_masuk, divisi, jabatan, username, password, role, created_at, updated_at) 
            values ('$values->nik', '$values->nama_lengkap', '$values->tgl_masuk', '$values->divisi', '$values->jabatan', '$values->username', '$values->password', '$role','$values->created_at', '$values->updated_at')");
            return $result;
        }
    }

    public function update_data(Object $values, $id, $role = 'karyawan')
    {
        if ($role === 'karyawan') {
            // Update without username and password
            $result = DB::update("update $this->table_karyawan set nik = '$values->nik', nama_lengkap = '$values->nama_lengkap',
            tgl_masuk = '$values->tgl_masuk', divisi = '$values->divisi', jabatan = '$values->jabatan', role = '$role', updated_at = '$values->updated_at'  where id = '$id'");
            return $result;
        } else {
            // Update with username and password
            $result = DB::update("update $this->table_karyawan set nik = '$values->nik', nama_lengkap = '$values->nama_lengkap',
            tgl_masuk = '$values->tgl_masuk', divisi = '$values->divisi', jabatan = '$values->jabatan', username = '$values->username', role = '$role', updated_at = '$values->updated_at'  where id = '$id'");
            return $result;
        }
    }

    public function update_password($id, $new_password)
    {
        $result = DB::update("update $this->table_karyawan set password = '$new_password' where id = '$id'");
        return $result;
    }

    public function delete_data($id)
    {
        $result = DB::delete("delete from $this->table_karyawan where id = $id");
        return $result;
    }
}
