<?php

namespace App\Http\Controllers;

use App\Karyawan;
use App\Penilaian;
use DateTime;
use Illuminate\Http\Request;
use stdClass;

class PenilaianController extends Controller
{
    private $penilaian_model;
    private $karyawan_model;

    public function __construct()
    {
        $this->penilaian_model = new Penilaian;
        $this->karyawan_model = new Karyawan;
    }

    public function index()
    {
        $data['karyawan'] = $this->karyawan_model->get_karyawan_with_nilai();
        return view('penilaian.index', $data);
    }

    public function hitung_penilaian($request)
    {
        $date = new DateTime();
        $values =  new stdClass();
        // Parameter
        $id_karyawan = $request->input('id_karyawan');
        $kualitas_kerja = $nilai[1] = $request->input('kualitas_kerja');
        $kuantitas_kerja = $nilai[2] = $request->input('kuantitas_kerja');
        $disiplin_kerja = $nilai[3] = $request->input('disiplin_kerja');
        $kerja_sama = $nilai[4] = $request->input('kerja_sama');
        $pengetahuan = $nilai[5] = $request->input('pengetahuan');
        $minat_kerja = $nilai[6] = $request->input('minat_kerja');
        $koordinasi = $nilai[7] = $request->input('koordinasi');
        $keputusan_masalah = $nilai[8] = $request->input('keputusan_masalah');
        $komunikasi = $nilai[9] = $request->input('komunikasi');
        $penyesuaian_diri = $nilai[10] = $request->input('penyesuaian_diri');
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
        $cf_evaluasi = $nilai_cf[1] = ($bobot_nilai['disiplin_kerja'] + $bobot_nilai['kerja_sama']) / 2;
        $sf_evaluasi = $nilai_sf[1] = ($bobot_nilai['kualitas_kerja'] + $bobot_nilai['kuantitas_kerja']) / 2;
        $cf_intelektual = $nilai_cf[2] = ($bobot_nilai['pengetahuan'] + $bobot_nilai['koordinasi']) / 2;
        $sf_intelektual = $nilai_sf[2] = $bobot_nilai['minat_kerja'];
        $cf_softskill = $nilai_cf[3] = ($bobot_nilai['keputusan_masalah'] + $bobot_nilai['komunikasi']) / 2;
        $sf_softskill = $nilai_sf[3] = $bobot_nilai['penyesuaian_diri'];
        // Perhitungan total nilai per aspek
        $total_evaluasi = $nilai_total[1] = (0.6 * $cf_evaluasi) + (0.4 * $sf_evaluasi);
        $total_intelektual = $nilai_total[2] = (0.6 * $cf_intelektual) + (0.4 * $sf_intelektual);
        $total_softskill = $nilai_total[3] = (0.6 * $cf_softskill) + (0.4 * $sf_softskill);
        // Perhitungan nilai total dan ranking
        $nilai_akhir = (0.5 * $total_evaluasi) + (0.2 * $total_intelektual) + (0.3 * $total_softskill);
        switch ($nilai_akhir) {
            case $nilai_akhir > 2.36 && $nilai_akhir <= 2.78:
                $kesimpulan = "phk";
                break;
            case $nilai_akhir > 2.79 && $nilai_akhir <= 3.29:
                $kesimpulan = "training";
                break;
            case $nilai_akhir > 3.30 && $nilai_akhir <= 3.80:
                $kesimpulan = "demosi";
                break;
            case $nilai_akhir > 3.81 && $nilai_akhir <= 4.31:
                $kesimpulan = "mutasi";
                break;
            case $nilai_akhir > 4.32 && $nilai_akhir <= 4.82:
                $kesimpulan = "promosi";
                break;

            default:
                $kesimpulan = '';
                break;
        }
        $values->id_karyawan = $id_karyawan;
        $values->nilai_akhir = $nilai_akhir;
        $values->kesimpulan = $kesimpulan;
        $values->updated_at = $date->format('Y-m-d H:i:s');
        for ($ii = 1; $ii < 11; $ii++) {
            $values->nilai[$ii] = $nilai[$ii];
        }
        for ($jj = 1; $jj < 4; $jj++) {
            $values->nilai_cf[$jj] = $nilai[$jj];
            $values->nilai_sf[$jj] = $nilai[$jj];
            $values->nilai_total[$jj] = $nilai[$jj];
        }

        return $values;
    }

    public function store_insert(Request $request)
    {
        $date = new DateTime();
        $values = $this->hitung_penilaian($request);
        $values->notes = '';
        $values->created_at = $date->format('Y-m-d H:i:s');
        $id_karyawan = $request->input('id_karyawan');
        $this->penilaian_model->insert_nilai_hasil($values);
        $this->penilaian_model->insert_nilai($values);
        $this->penilaian_model->insert_nilai_cf_sf($values);

        return redirect("/dashboard/rekap_nilai/$id_karyawan");
    }

    public function store_update(Request $request, $id)
    {
        $nama_lengkap = $request->input('nama_lengkap');
        if ($request->input('notes')) {
            $date = new DateTime();
            $values =  new stdClass();
            $values->notes = $request->input('notes');
            $values->kesimpulan = $request->input('kesimpulan');
            $values->updated_at = $date->format('Y-m-d H:i:s');
            $this->penilaian_model->update_kesimpulan_notes($values, $id);
            return redirect('/dashboard/penilaian')->with('success', "Anda sudah memberikan nilai untuk $nama_lengkap");
        }

        $values = $this->hitung_penilaian($request);
        $this->penilaian_model->update_nilai_hasil($values, $id);
        $this->penilaian_model->update_nilai($values, $id);
        $this->penilaian_model->update_nilai_cf_sf($values, $id);
        return redirect("/dashboard/rekap_nilai/$id");
    }

    public function input($id)
    {
        // Panggil data karyawan untuk input
        $data['karyawan'] = $this->karyawan_model->get_data_by('id', $id);
        return view('penilaian.form', $data);
    }

    public function review($id)
    {
        // Panggil data karyawan dan nilai untuk disabled
        $data['id_karyawan'] = $id;
        $data['karyawan'] = $this->karyawan_model->get_data_by('id', $id);
        $data['nilai_hasil'] = $this->penilaian_model->get_nilai_hasil_by('id_karyawan', $id);
        $data['nilai_per_kriteria'] = $this->penilaian_model->get_nilai_kriteria_by('id_karyawan', $id);
        if (empty($data['nilai_hasil'])) {
            return redirect('/dashboard/penilaian')->with('failed', 'User belum dinilai!');
        }
        return view('penilaian.ubah', $data);
    }

    public function detail_nilai_karyawan()
    {
        // Panggil data karyawan dan nilai untuk disabled
        return view('penilaian.detail');
    }

    public function rekap($id)
    {
        // Panggil data karyawan dan nilai untuk disabled
        $data['id_karyawan'] = $id;
        $data['karyawan'] = $this->karyawan_model->get_data_by('id', $id);
        $data['nilai_hasil'] = $this->penilaian_model->get_nilai_hasil_by('id_karyawan', $id);
        $data['nilai_per_kriteria'] = $this->penilaian_model->get_nilai_kriteria_by('id_karyawan', $id);
        if (empty($data['nilai_hasil'])) {
            return redirect('/dashboard/penilaian')->with('failed', 'User belum dinilai!');
        }
        return view('penilaian.rekap', $data);
    }
}
