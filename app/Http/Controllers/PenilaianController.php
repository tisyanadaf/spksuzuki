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
        // Parameter
        $id_karyawan = $request->input('id_karyawan');
        $kualitas_kerja = $request->input('kualitas_kerja');
        $disiplin_kerja = $request->input('disiplin_kerja');
        $kuantitas_kerja = $request->input('kuantitas_kerja');
        $kerja_sama = $request->input('kerja_sama');
        $pengetahuan = $request->input('pengetahuan');
        $koordinasi = $request->input('koordinasi');
        $minat_kerja = $request->input('minat_kerja');
        $keputusan_masalah = $request->input('keputusan_masalah');
        $penyesuaian_diri = $request->input('penyesuaian_diri');
        $komunikasi = $request->input('komunikasi');
        // Proses pengurangan gap
        $gap['kualitas_kerja'] = $kualitas_kerja - 4;
        $gap['kuantitas_kerja'] = $kuantitas_kerja - 3;
        $gap['disiplin_kerja'] = $disiplin_kerja - 4;
        $gap['kerja_sama'] = $kerja_sama - 4;
        $gap['pengetahuan'] = $pengetahuan - 4;
        $gap['minat_kerja'] = $minat_kerja - 3;
        $gap['koordinasi'] = $koordinasi - 3;
        $gap['keputusan_masalah'] = $keputusan_masalah - 4;
        $gap['komunikasi'] = $komunikasi - 4;
        $gap['penyesuaian_diri'] = $penyesuaian_diri - 3;
        // Proses penentuan bobot nilai
        foreach ($gap as $key => $value) {
            switch ($value) {
                case 0:
                    $bobot_nilai[$key] = 5;
                    $keterangan[$key] = "Kompetensi Sesuai Dengan yang Dibutuhkan";
                    break;
                case 1:
                    $bobot_nilai[$key] = 4.5;
                    $keterangan[$key] = "Kompetensi Individu Kelebihan 1 Tingkat";
                    break;
                case -1:
                    $bobot_nilai[$key] = 4;
                    $keterangan[$key] = "Kompetensi Individu Kekurangan 1 Tingkat";
                    break;
                case 2:
                    $bobot_nilai[$key] = 3.5;
                    $keterangan[$key] = "Kompetensi Individu Kelebihan 2 Tingkat";
                    break;
                case -2:
                    $bobot_nilai[$key] = 3;
                    $keterangan[$key] = "Kompetensi Individu Kekurangan 2 Tingkat";
                    break;
                case 3:
                    $bobot_nilai[$key] = 2.5;
                    $keterangan[$key] = "Kompetensi Individu Kelebihan 3 Tingkat";
                    break;
                case -3:
                    $bobot_nilai[$key] = 2;
                    $keterangan[$key] = "Kompetensi Individu Kekurangan 3 Tingkat";
                    break;
                case 4:
                    $bobot_nilai[$key] = 1.5;
                    $keterangan[$key] = "Kompetensi Individu Kelebihan 4 Tingkat";
                    break;
                case -4:
                    $bobot_nilai[$key] = 1;
                    $keterangan[$key] = "Kompetensi Individu Kekurangan 4 Tingkat";
                    break;

                default:
                    $bobot_nilai[$key] = 0;
                    $keterangan[$key] = "Kompetensi Tak Terhitung";
                    break;
            }
        }
        // Perhitungan Core Factor dan Secondary Factor
        $cf_evaluasi = ($bobot_nilai['disiplin_kerja'] + $bobot_nilai['kerja_sama']) / 2;
        $sf_evaluasi = ($bobot_nilai['kualitas_kerja'] + $bobot_nilai['kuantitas_kerja']) / 2;
        $cf_intelektual = ($bobot_nilai['pengetahuan'] + $bobot_nilai['koordinasi']) / 2;
        $sf_intelektual = $bobot_nilai['minat_kerja'];
        $cf_softskill = ($bobot_nilai['keputusan_masalah'] + $bobot_nilai['komunikasi']) / 2;
        $sf_softskill = $bobot_nilai['penyesuaian_diri'];
        // Perhitungan total nilai per aspek
        $total_evaluasi = (0.6 * $cf_evaluasi) + (0.4 * $sf_evaluasi);
        $total_intelektual = (0.6 * $cf_intelektual) + (0.4 * $sf_intelektual);
        $total_softskill = (0.6 * $cf_softskill) + (0.4 * $sf_softskill);
        // Perhitungan nilai total dan ranking
        $nilai_total = (0.5 * $total_evaluasi) + (0.2 * $total_intelektual) + (0.3* $total_softskill);
        
        dd($nilai_total);
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
