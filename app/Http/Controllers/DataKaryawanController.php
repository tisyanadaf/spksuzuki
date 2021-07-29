<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use DateTime;
use stdClass;

class DataKaryawanController extends Controller
{
    private $karyawan_model;

    public function __construct()
    {
        $this->karyawan_model = new Karyawan;
    }

    public function index()
    {
        $data['all_karyawan'] = $this->karyawan_model->get_all('karyawan');
        $data['penjualan'] = $this->karyawan_model->get_data_by('divisi', 'penjualan', 'karyawan');
        $data['service'] = $this->karyawan_model->get_data_by('divisi', 'service', 'karyawan');
        return view('data_karyawan.index', $data);
    }

    public function store(Request $request, $id = null)
    {
        $form = is_null($id) ? 'tambah' : 'edit';
        $date = new DateTime();
        $values =  new stdClass();

        if ($request->isMethod('post')) {
            if ($form === 'tambah') {
                $values->nik = $request->nik;
                $values->nama_lengkap = $request->nama_lengkap;
                $values->tgl_masuk = $request->tgl_masuk;
                $values->divisi = $request->divisi;
                $values->jabatan = $request->jabatan;
                $values->created_at = $date->format('Y-m-d H:i:s');
                $values->updated_at = $date->format('Y-m-d H:i:s');

                $result = $this->karyawan_model->insert_data($values);
                if ($result) {
                    $request->session()->flash('success', 'Data karyawan berhasil dibuat');
                } else {
                    $request->session()->flash('failed', 'Data karyawan gagal dibuat');
                }

                return redirect('dashboard/data_karyawan');
            } else {
                $values->nik = $request->nik;
                $values->nama_lengkap = $request->nama_lengkap;
                $values->tgl_masuk = $request->tgl_masuk;
                $values->divisi = $request->divisi;
                $values->jabatan = $request->jabatan;
                $values->updated_at = $date->format('Y-m-d H:i:s');

                $result = $this->karyawan_model->update_data($values, $id);
                if ($result) {
                    $request->session()->flash('success', 'Data karyawan berhasil diedit');
                } else {
                    $request->session()->flash('failed', 'Data karyawan gagal diedit');
                }

                return redirect('dashboard/data_karyawan');
            }
        }

        if ($form === 'edit') {
            $data['id'] = $id;
            $data['karyawan'] = $this->karyawan_model->get_data_by('id', $id);
            return view('data_karyawan.ubah', $data);
        } else {
            return view('data_karyawan.form');
        }
    }

    public function delete($id)
    {
        $karyawan = $this->karyawan_model->get_data_by('id', $id);
        $nama = strval($karyawan[0]->nama_lengkap);

        if (count($karyawan) !== 0) {
            $this->karyawan_model->delete_data($id);
            return redirect('dashboard/data_karyawan')->with('success', "Data $nama berhasil dihapus");
        }

        return redirect('dashboard/data_karyawan')->with('failed', 'Data gagal dihapus');
    }
}
