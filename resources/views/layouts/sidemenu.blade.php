<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
            <li id="dashboard" class=""> <a href="{{ url('dashboard') }}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"> </span> </a>
            </li>
            <li id="data-karyawan" class=""> <a href="{{ url('dashboard/data_karyawan') }}"> <i class="fa fa-list-alt"></i> <span>Data Karyawan</span> <span class="pull-right-container"> </span> </a>
            </li>
            <li id="input-penilaian" class=""> <a href="{{ url('dashboard/penilaian') }}"> <i class="fa fa-pencil-square-o"></i> <span>Input Penilaian</span> <span class="pull-right-container"> </span></a>
            </li>
            @if (auth()->user()->divisi === "kepala cabang")
            <li id="hasil-penilaian" class=""> <a href="{{ url('dashboard/hasil_nilai') }}"> <i class="fa fa-file-text"></i> <span>Hasil Penilaian</span> <span class="pull-right-container"> </span></a>
            </li>
            @endif
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>