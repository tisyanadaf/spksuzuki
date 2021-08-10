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
                <form method="POST" action='{{ url("dashboard/rekap_nilai/$id_karyawan") }}'' class="card p-4">
                    {{csrf_field()}}
                    <input type="hidden" name="nama_lengkap" value="{{$karyawan[0]->nama_lengkap}}"/>
                    <h4>
                        <div class="list-group-item list-group-item-success"><i class="fa fa-clipboard"></i><b> Rekap Nilai</b></div>
                    </h4>
                    <br>
                    <table border="0">
                        <tr>
                            <td> <strong> NIK </strong> </td>
                            <td> : </td>
                            <td> {{$karyawan['0']->nik}} </td>
                            </td>
                        <tr>
                            <td> <strong> Nama Karyawan </strong> </td>
                            <td> : </td>
                            <td> {{$karyawan['0']->nama_lengkap}} </td>
                        </tr>
                        <tr>
                            <td> <strong> Jabatan </strong> </td>
                            <td> : </td>
                            <td> {{$karyawan['0']->jabatan}} </td>
                        </tr>
                        <tr>
                            <td> <strong> Divisi </strong> </td>
                            <td> : </td>
                            <td> {{strtoupper($karyawan['0']->divisi)}} </td>
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
                            <td> {{$nilai_per_kriteria[0]->nilai}} </td>
                        </tr>
                        <tr>
                            <td>Kuantitas Kerja</td>
                            <td> : </td>
                            <td> {{$nilai_per_kriteria[1]->nilai}} </td>
                        </tr>
                        <tr>
                            <td>Disiplin Kerja</td>
                            <td> : </td>
                            <td>{{$nilai_per_kriteria[2]->nilai}} </td>
                        </tr>
                        <tr>
                            <td>Kerja Sama</td>
                            <td> : </td>
                            <td> {{$nilai_per_kriteria[3]->nilai}} </td>
                        </tr>
                        <tr>
                            <td><strong> B. Aspek Intelektual </strong></td>
                        </tr>
                        <tr>
                            <td>Pengetahuan dan Keterampilan Kerja</td>
                            <td> : </td>
                            <td> {{$nilai_per_kriteria[4]->nilai}} </td>
                        </tr>
                        <tr>
                            <td>Koordinasi atau Pendelegasian Tugas</td>
                            <td> : </td>
                            <td> {{$nilai_per_kriteria[5]->nilai}} </td>
                        </tr>
                        <tr>
                            <td>Minat dalam Kerja</td>
                            <td> : </td>
                            <td> {{$nilai_per_kriteria[6]->nilai}} </td>
                        </tr>
                        <tr>
                            <td><strong> C. Aspek Softskill </strong></td>
                        </tr>
                        <tr>
                            <td>Teknik Mengatasi Masalah</td>
                            <td> : </td>
                            <td> {{$nilai_per_kriteria[7]->nilai}} </td>
                        </tr>
                        <tr>
                            <td>Kemampuan Berkomunikasi</td>
                            <td> : </td>
                            <td> {{$nilai_per_kriteria[8]->nilai}} </td>
                        </tr>
                        <tr>
                            <td>Penyesuaian Diri </td>
                            <td> : </td>
                            <td> {{$nilai_per_kriteria[9]->nilai}} </td>
                        </tr>
                        <tr>
                            <td><strong> Hasil Nilai </strong> </td>
                            <td> : </td>
                            <td> {{$nilai_hasil[0]->nilai_akhir}} </td>
                        </tr>
                        <tr>
                            <td><strong> Kesimpulan </strong> </td>
                            <td> : </td>
                            <td>
                                <select name="kesimpulan" class="form-control custom-select">
                                    <option value="">Pilih Kesimpulan</option>
                                    <option value="promosi" @if($nilai_hasil[0]->kesimpulan === 'promosi') selected @endif>Promosi</option>
                                    <option value="mutasi" @if($nilai_hasil[0]->kesimpulan === 'mutasi') selected @endif>Mutasi</option>
                                    <option value="demosi" @if($nilai_hasil[0]->kesimpulan === 'demosi') selected @endif>Demosi</option>
                                    <option value="training" @if($nilai_hasil[0]->kesimpulan === 'training') selected @endif>Training</option>
                                    <option value="phk" @if($nilai_hasil[0]->kesimpulan === 'phk') selected @endif>PHK</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><strong> Notes </strong> </td>
                            <td> : </td>
                            <td>
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="note" name="notes" rows="3">{{$nilai_hasil[0]->notes}}</textarea>
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
                                        <a href='{{ url("dashboard/review_nilai/$id_karyawan") }}' class="btn btn-warning">Ubah</a>
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