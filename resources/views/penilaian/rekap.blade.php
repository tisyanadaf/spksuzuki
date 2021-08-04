@extends('index')
@section('title')
<title>Rekap Penilaian</title>
@stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <ol class="breadcrumb">
            <li><a href="{{ url('dashboard/penilaian') }}">Input Penilaian</a></li>
            <li class="sub-bread"><i class="fa fa-angle-right"></i> Rekap Penilaian</li>
        </ol>
        <h1>Rekap Data Penilaian</h1>
    </div>
    <!-- Main content -->
    <div class="content">
        <h3 class="text-center text-black">PT. Dwi Perkasa Mobiltama Cibubur</h3>
        <div class="row justify-content-center">
            <div class="col col-6">
                <div class="card p-4">
                    <h4>
                        <div class="list-group-item list-group-item-success"><i class="fa fa-clipboard"></i><b> Rekap Nilai</b></div>
                    </h4>
                    <br>
                    <table border="0">
                        <tr>
                            <td> <strong> NIK </strong> </td>
                            <td> : </td>
                            <td> {{auth()->user()->nik}} </td>
                        </td>
                        <tr>
                            <td> <strong> Nama Karyawan </strong> </td>
                            <td> : </td>
                            <td> {{auth()->user()->nama_lengkap}} </td>
                        </tr>
                        <tr>
                            <td> <strong> Jabatan </strong> </td>
                            <td> : </td>
                            <td> {{auth()->user()->jabatan}} </td>
                        </tr>
                        <tr>
                            <td> <strong> Divisi </strong> </td>
                            <td> : </td>
                            <td> {{auth()->user()->divisi}} </td>
                        </tr>
                        <tr>
                            <td> <strong> Penilaian </strong> </td>
                        </tr>
                        <tr>
                            <td><strong> A. Aspek Evaluasi </strong></td>
                        </tr>
                        <tr>
                            <td>Kualitas Kerja</td>
                            <td> : </td>
                            <td>  </td>
                        </tr>
                        <tr>
                            <td>Kuantitas Kerja</td>
                            <td> : </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Disiplin Kerja</td>
                            <td> : </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Kerja Sama</td>
                            <td> : </td>
                            <td>  </td>
                        </tr>
                        <tr>
                            <td><strong> B. Aspek Intelektual </strong></td>
                        </tr>
                        <tr>
                            <td>Pengetahuan dan Keterampilan Kerja</td>
                            <td> : </td>
                            <td>  </td>
                        </tr>
                        <tr>
                            <td>Koordinasi atau Pendelegasian Tugas</td>
                            <td> : </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Minat dalam Kerja</td>
                            <td> : </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><strong> C. Aspek Softskill </strong></td>
                        </tr>
                        <tr>
                            <td>Teknik Mengatasi Masalah</td>
                            <td> : </td>
                            <td>  </td>
                        </tr>
                        <tr>
                            <td>Kemampuan Berkomunikasi</td>
                            <td> : </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Penyesuaian Diri </td>
                            <td> : </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><strong> Hasil Nilai </strong> </td>
                            <td> : </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td><strong> Kesimpulan </strong> </td>
                            <td> : </td>
                            <td> 
                                <select name="kesimpulan" class="form-control custom-select">
                                    <option value="">Pilih Kesimpulan</option>
                                    <option value="promosi">Promosi</option>
                                    <option value="mutasi">Mutasi</option>
                                    <option value="demosi">Demosi</option>
                                    <option value="training">Training</option>
                                    <option value="phk">PHK</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><strong> Notes </strong> </td>
                            <td> : </td>
                            <td> 
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                                </fieldset>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table>
                        <tr>
                            <td align="right">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-warning">Ubah</button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                    </table>
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