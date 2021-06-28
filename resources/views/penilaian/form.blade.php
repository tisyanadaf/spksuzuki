@extends('index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Form Data Penilaian</h1>
    </div>
    <!-- Main content -->
    <div class="content">
        <h3 class="text-center text-black">PT. Dwi Perkasa Mobiltama Cibubur</h3>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-black p-2">Nama Karyawan : xxxxxxxxx</h5>
                        <hr>
                        <div id="demo">
                            <div class="step-app">
                                <ul class="step-steps">
                                    <li><a href="#step1"><span class="number">1</span> Aspek Evaluasi</a></li>
                                    <li><a href="#step2"><span class="number">2</span> Aspek Intelektual</a></li>
                                    <li><a href="#step3"><span class="number">3</span> Aspek Softskill</a></li>
                                    <li><a href="#step4"><span class="number">4</span> Ranking dan Kesimpulan</a></li>
                                </ul>
                                <div class="step-content">
                                    <div class="step-tab-panel" id="step1">
                                        <form>
                                            <div class="row m-t-2">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstName1">Kualitas Kerja :</label>
                                                        <select class="form-control custom-select">
                                                            <option selected value="" disabled>Pilih Penilaian</option>
                                                            <option value="">Baik</option>
                                                            <option value="">Buruk</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstName1">Disiplin Kerja :</label>
                                                        <select class="form-control custom-select">
                                                            <option selected value="" disabled>Pilih Penilaian</option>
                                                            <option value="">Baik</option>
                                                            <option value="">Buruk</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstName1">Kuantitas Kerja :</label>
                                                        <select class="form-control custom-select">
                                                            <option selected value="" disabled>Pilih Penilaian</option>
                                                            <option value="">Baik</option>
                                                            <option value="">Buruk</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastName1">Kerja Sama :</label>
                                                        <select class="form-control custom-select">
                                                            <option selected value="" disabled>Pilih Penilaian</option>
                                                            <option value="">Baik</option>
                                                            <option value="">Buruk</option>
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
                                                    <label for="jobTitle1">Pengetahuan dan Keterampilan Kerja :</label>
                                                    <select class="form-control custom-select">
                                                        <option selected value="" disabled>Pilih Penilaian</option>
                                                        <option value="">Baik</option>
                                                        <option value="">Buruk</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="videoUrl1">Koordinasi atau Pendelegasian Tugas :</label>
                                                    <select class="form-control custom-select">
                                                        <option selected value="" disabled>Pilih Penilaian</option>
                                                        <option value="">Baik</option>
                                                        <option value="">Buruk</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="videoUrl1">Minat dalam Kerja :</label>
                                                    <select class="form-control custom-select">
                                                        <option selected value="" disabled>Pilih Penilaian</option>
                                                        <option value="">Baik</option>
                                                        <option value="">Buruk</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-tab-panel" id="step3">
                                        <div class="row m-t-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="int1">Pengambilan Keputusan atau Teknik Mengatasi Masalah :</label>
                                                    <select class="form-control custom-select">
                                                        <option selected value="" disabled>Pilih Penilaian</option>
                                                        <option value="">Baik</option>
                                                        <option value="">Buruk</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle2">Penyesuaian Diri :</label>
                                                    <select class="form-control custom-select">
                                                        <option selected value="" disabled>Pilih Penilaian</option>
                                                        <option value="">Baik</option>
                                                        <option value="">Buruk</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle2">Kemampuan Berkomunikasi :</label>
                                                    <select class="form-control custom-select">
                                                        <option selected value="" disabled>Pilih Penilaian</option>
                                                        <option value="">Baik</option>
                                                        <option value="">Buruk</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-tab-panel" id="step4">
                                        <div class="row m-t-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="behName1">Notes :</label>
                                                    <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Ranking</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kesimpulan :</label>
                                                    <select class="form-control custom-select">
                                                        <option selected value="" disabled>Pilih Penilaian</option>
                                                        <option value="">Baik</option>
                                                        <option value="">Buruk</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-footer">
                                    <button data-direction="prev" class="btn btn-light">Previous</button>
                                    <button data-direction="next" class="btn btn-primary">Next</button>
                                    <button data-direction="finish" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
    @section('scriptJS')
    @include('penilaian.penilaian_js')
    @stop