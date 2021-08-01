<?php

namespace App\Http\Controllers;

use App\Penilaian;
use DateTime;
use Illuminate\Http\Request;
use stdClass;

class PenilaianController extends Controller
{
    private $penilaian_model;

    public function __construct()
    {
        $this->penilaian_model = new Penilaian;
    }

    public function index()
    {
        $data['karyawan'] = $this->penilaian_model->get_karyawan_all();
        return view('penilaian.index', $data);
    }

    public function store(Request $request, $id = null)
    {
        $form = is_null($id) ? 'tambah' : 'edit';
        $date = new DateTime();
        $values =  new stdClass();

        dd($request);
    }

    public function input($id)
    {
        // Panggil data karyawan untuk input
        $data['karyawan'] = $this->penilaian_model->get_karyawan_by('id', $id);
        return view('penilaian.form', $data);
    }

    public function review($id)
    {
        // Panggil data karyawan dan nilai untuk disabled
        return view('penilaian.form');
    }

    public function detail_nilai_karyawan()
    {
        // Panggil data karyawan dan nilai untuk disabled
        return view('penilaian.detail');
    }

    public function rekap($id)
    {
        // Panggil data karyawan dan nilai untuk disabled
        return view('penilaian.rekap');
    }
}
