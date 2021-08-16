<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Karyawan;

class DashboardController extends Controller
{
    private $karyawan_model;

    public function __construct()
    {
        $this->karyawan_model = new Karyawan;
    }

    public function index()
    {
        $data['penjualan_pria'] = $this->karyawan_model->get_by_divisi('jenis_kelamin', 'divisi', 'pria', 'penjualan', 'karyawan');
        $data['penjualan_wanita'] = $this->karyawan_model->get_by_divisi('jenis_kelamin', 'divisi', 'wanita', 'penjualan', 'karyawan');
        $data['service_wanita'] = $this->karyawan_model->get_by_divisi('jenis_kelamin', 'divisi', 'wanita', 'service', 'karyawan');
        $data['service_pria'] = $this->karyawan_model->get_by_divisi('jenis_kelamin', 'divisi', 'pria', 'service', 'karyawan');
        $data['jumlah_nilai'] = $this->karyawan_model->get_karyawan_dinilai();

        return view('dashboard.index', $data);
    }

}
