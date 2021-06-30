<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
            <li class="active"> <a href="{{ url('dashboard') }}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"> </span> </a>
            </li>
            <li class=""> <a href="{{ url('dashboard/data_karyawan') }}"> <i class="fa fa-list-alt"></i> <span>Data Karyawan</span> <span class="pull-right-container"> </span> </a>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-tasks"></i> <span>Penilaian</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('dashboard/input_nilai') }}">Input Penilaian</a></li>
                    <li><a href="{{ url('dashboard/hasil_nilai') }}">Hasil Penilaian</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>