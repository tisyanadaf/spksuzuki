@extends('index')
@section('title')
<title>Form Penilaian</title>
@stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <ol class="breadcrumb">
            <li><a href="{{ url('dashboard/penilaian') }}">Input Penilaian</a></li>
            <li class="sub-bread"><i class="fa fa-angle-right"></i> Form Penilaian</li>
        </ol>
        <h1>Form Data Penilaian</h1>
    </div>
    <!-- Main content -->
    <div class="content">
        <h3 class="text-center text-black">PT. Dwi Perkasa Mobiltama Cibubur</h3>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card bg-light mb-3">
                        <h4>
                            <div class="list-group-item list-group-item-info"><i class="fa fa-warning"></i><b>Notes</b></div>
                        </h4>
                        <div class="card-body">
                            <p class="card-text">
                            <ol>
                                <li> Mohon isi sesuai dengan kinerja karyawan. </li>
                                <li> Mohon isi dengan jujur, teliti, dan objektif. </li>
                                <li> Proses penilaian ini menggunakan metode Profile Matching. </li>
                                <li> Berikut ini ketentuan untuk penilaian :
                                    <ul>
                                        <li> Beri nilai <b>4</b> untuk keterangan <b>"Sangat Baik"</b> </li>
                                        <li> Beri nilai <b>3</b> untuk keterangan <b>"Baik"</b> </li>
                                        <li> Beri nilai <b>2</b> untuk keterangan <b>"Cukup Baik"</b> </li>
                                        <li> Beri nilai <b>1</b> untuk keterangan <b>"Tidak Baik"</b> </li>
                                    </ul>
                                </li>
                                <li> Kesimpulan dari hasil penilaian yang telah diproses dapat diubah oleh Kepala Cabang
                                    dengan berbagai pertimbangan secara objektif. </li>
                                <li> Kesimpulan dari hasil yang telah diproses akan diserahkan oleh Kepala Cabang kepada HRD pusat
                                    sebagai saran untuk karir para karyawan.
                                    </p>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="text-black p-2">Nama Karyawan : {{$karyawan[0]->nama_lengkap}}</h5>
                        <hr>
                        <form id="demo" action='{{ url("dashboard/review_nilai/$id_karyawan") }}' method="post">
                            <div>
                                {{csrf_field()}}
                                <input type="hidden" name="id_karyawan" value="{{$karyawan[0]->id}}" />
                                <div class="step-app">
                                    <ul class="step-steps">
                                        <li><a href="#step1"><span class="number">1</span> Aspek Evaluasi</a></li>
                                        <li><a href="#step2"><span class="number">2</span> Aspek Intelektual</a></li>
                                        <li><a href="#step3"><span class="number">3</span> Aspek Softskill</a></li>
                                    </ul>
                                    <div class="step-content">
                                        <div class="step-tab-panel" id="step1">
                                            <form>
                                                <div class="row m-t-2">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="kualitas_kerja">Kualitas Kerja :</label>
                                                            <select id="kualitas_kerja" required name="kualitas_kerja" class="form-control custom-select">
                                                                <option selected value="" disabled>Pilih Penilaian</option>
                                                                <option value="1" @if($nilai_per_kriteria[0]->nilai === 1) selected @endif>1</option>
                                                                <option value="2" @if($nilai_per_kriteria[0]->nilai === 2) selected @endif>2</option>
                                                                <option value="3" @if($nilai_per_kriteria[0]->nilai === 3) selected @endif>3</option>
                                                                <option value="4" @if($nilai_per_kriteria[0]->nilai === 4) selected @endif>4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="kuantitas_kerja">Kuantitas Kerja :</label>
                                                            <select id="kuantitas_kerja" required name="kuantitas_kerja" class="form-control custom-select">
                                                                <option selected value="" disabled>Pilih Penilaian</option>
                                                                <option value="1" @if($nilai_per_kriteria[1]->nilai === 1) selected @endif>1</option>
                                                                <option value="2" @if($nilai_per_kriteria[1]->nilai === 2) selected @endif>2</option>
                                                                <option value="3" @if($nilai_per_kriteria[1]->nilai === 3) selected @endif>3</option>
                                                                <option value="4" @if($nilai_per_kriteria[1]->nilai === 4) selected @endif>4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="disiplin_kerja">Disiplin Kerja :</label>
                                                            <select id="disiplin_kerja" required name="disiplin_kerja" class="form-control custom-select">
                                                                <option selected value="" disabled>Pilih Penilaian</option>
                                                                <option value="1" @if($nilai_per_kriteria[2]->nilai === 1) selected @endif>1</option>
                                                                <option value="2" @if($nilai_per_kriteria[2]->nilai === 2) selected @endif>2</option>
                                                                <option value="3" @if($nilai_per_kriteria[2]->nilai === 3) selected @endif>3</option>
                                                                <option value="4" @if($nilai_per_kriteria[2]->nilai === 4) selected @endif>4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="kerja_sama">Kerja Sama :</label>
                                                            <select id="kerja_sama" required name="kerja_sama" class="form-control custom-select">
                                                                <option selected value="" disabled>Pilih Penilaian</option>
                                                                <option value="1" @if($nilai_per_kriteria[3]->nilai === 1) selected @endif>1</option>
                                                                <option value="2" @if($nilai_per_kriteria[3]->nilai === 2) selected @endif>2</option>
                                                                <option value="3" @if($nilai_per_kriteria[3]->nilai === 3) selected @endif>3</option>
                                                                <option value="4" @if($nilai_per_kriteria[3]->nilai === 4) selected @endif>4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="step-tab-panel" id="step2">
                                            <div class="row m-t-2">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="pengetahuan">Pengetahuan dan Keterampilan Kerja :</label>
                                                        <select id="pengetahuan" required name="pengetahuan" class="form-control custom-select">
                                                            <option selected value="" disabled>Pilih Penilaian</option>
                                                            <option value="1" @if($nilai_per_kriteria[4]->nilai === 1) selected @endif>1</option>
                                                            <option value="2" @if($nilai_per_kriteria[4]->nilai === 2) selected @endif>2</option>
                                                            <option value="3" @if($nilai_per_kriteria[4]->nilai === 3) selected @endif>3</option>
                                                            <option value="4" @if($nilai_per_kriteria[4]->nilai === 4) selected @endif>4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="koordinasi">Koordinasi atau Pendelegasian Tugas :</label>
                                                        <select id="koordinasi" required name="koordinasi" class="form-control custom-select">
                                                            <option selected value="" disabled>Pilih Penilaian</option>
                                                            <option value="1" @if($nilai_per_kriteria[6]->nilai === 1) selected @endif>1</option>
                                                            <option value="2" @if($nilai_per_kriteria[6]->nilai === 2) selected @endif>2</option>
                                                            <option value="3" @if($nilai_per_kriteria[6]->nilai === 3) selected @endif>3</option>
                                                            <option value="4" @if($nilai_per_kriteria[6]->nilai === 4) selected @endif>4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="minat_kerja">Minat dalam Kerja :</label>
                                                        <select id="minat_kerja" required name="minat_kerja" class="form-control custom-select">
                                                            <option selected value="" disabled>Pilih Penilaian</option>
                                                            <option value="1" @if($nilai_per_kriteria[5]->nilai === 1) selected @endif>1</option>
                                                            <option value="2" @if($nilai_per_kriteria[5]->nilai === 2) selected @endif>2</option>
                                                            <option value="3" @if($nilai_per_kriteria[5]->nilai === 3) selected @endif>3</option>
                                                            <option value="4" @if($nilai_per_kriteria[5]->nilai === 4) selected @endif>4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step-tab-panel" id="step3">
                                            <div class="row m-t-2">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="keputusan_masalah">Teknik Mengatasi Masalah :</label>
                                                        <select id="keputusan_masalah" required name="keputusan_masalah" class="form-control custom-select">
                                                            <option selected value="" disabled>Pilih Penilaian</option>
                                                            <option value="1" @if($nilai_per_kriteria[7]->nilai === 1) selected @endif>1</option>
                                                            <option value="2" @if($nilai_per_kriteria[7]->nilai === 2) selected @endif>2</option>
                                                            <option value="3" @if($nilai_per_kriteria[7]->nilai === 3) selected @endif>3</option>
                                                            <option value="4" @if($nilai_per_kriteria[7]->nilai === 4) selected @endif>4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="penyesuaian_diri">Penyesuaian Diri :</label>
                                                        <select id="penyesuaian_diri" required name="penyesuaian_diri" class="form-control custom-select">
                                                            <option selected value="" disabled>Pilih Penilaian</option>
                                                            <option value="1" @if($nilai_per_kriteria[9]->nilai === 1) selected @endif>1</option>
                                                            <option value="2" @if($nilai_per_kriteria[9]->nilai === 2) selected @endif>2</option>
                                                            <option value="3" @if($nilai_per_kriteria[9]->nilai === 3) selected @endif>3</option>
                                                            <option value="4" @if($nilai_per_kriteria[9]->nilai === 4) selected @endif>4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="komunikasi">Kemampuan Berkomunikasi :</label>
                                                        <select id="komunikasi" required name="komunikasi" class="form-control custom-select">
                                                            <option selected value="" disabled>Pilih Penilaian</option>
                                                            <option value="1" @if($nilai_per_kriteria[8]->nilai === 1) selected @endif>1</option>
                                                            <option value="2" @if($nilai_per_kriteria[8]->nilai === 2) selected @endif>2</option>
                                                            <option value="3" @if($nilai_per_kriteria[8]->nilai === 3) selected @endif>3</option>
                                                            <option value="4" @if($nilai_per_kriteria[8]->nilai === 4) selected @endif>4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-footer">
                                        <button type="button" data-direction="prev" class="btn btn-light">Previous</button>
                                        <button type="button" data-direction="next" class="btn btn-primary">Next</button>
                                        <button type="submit" data-direction="finish" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
    @section('scriptJS')
    <script>
        var menu_active = document.getElementById('input-penilaian');
        menu_active.classList.add('active');
    </script>
    @include('penilaian.penilaian_js')
    @stop