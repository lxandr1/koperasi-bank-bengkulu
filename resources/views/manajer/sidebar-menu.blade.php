@can('isManajer')
    <li class="{{ set_active('manajer.dashboard') }}">
        <a href="{{ route('manajer.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
{{--
    <li class="{{ set_active('manajer.verifikasi_data_investor') }}">
        <a href="{{ route('manajer.verifikasi_data_investor') }}">
            <i class="fa fa-wpforms"></i> <span>Verifikasi Data Investor</span>
        </a>
    </li>

    <li class="{{ set_active('manajer.verifikasi_rekening_investor') }}">
        <a href="{{ route('manajer.verifikasi_rekening_investor') }}">
            <i class="fa fa-wpforms"></i> <span>Verifikasi Rekening Investor</span>
        </a>
    </li> --}}

    <li class="header" style="font-weight:bold;">Verifikasi</li>
    <li class="treeview {{ set_active(['manajer.verifikasi_data_investor','manajer.verifikasi_rekening_investor']) }}">
        <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Investor Perorangan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu ">
            <li class="{{ set_active(['manajer.verifikasi_data_investor']) }}"><a href="{{ route('manajer.verifikasi_data_investor') }}"><i class="fa fa-circle-o"></i>Verifikasi Data Investor</a></li>
            <li class="{{ set_active(['manajer.verifikasi_rekening_investor']) }}"><a href="{{ route('manajer.verifikasi_rekening_investor') }}"><i class="fa fa-circle-o"></i>Verifikasi Rekening Investor</a></li>
        </ul>
    </li>

    <li class="treeview {{ set_active(['manajer.verifikasi_data_institusi','manajer.verifikasi_rekening_institusi']) }}">
        <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Investor Non Perorangan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu ">
            <li class="{{ set_active(['manajer.verifikasi_data_institusi']) }}"><a href="{{ route('manajer.verifikasi_data_institusi') }}"><i class="fa fa-circle-o"></i>Verifikasi Data Institusi</a></li>
            <li class="{{ set_active(['manajer.verifikasi_rekening_institusi']) }}"><a href="{{ route('manajer.verifikasi_rekening_institusi') }}"><i class="fa fa-circle-o"></i>Verifikasi Rekening Institusi</a></li>
        </ul>
    </li>

    <li class="header" style="font-weight:bold;">LAPORAN</li>
    <li class="treeview {{ set_active(['manajer.laporan_nasabah','manajer.laporan_nasabah_filter','manajer.data_saham_nasabah','manajer.laporan_saham_filter']) }}">
        <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Laporan Perorangan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu ">
            <li class="{{ set_active(['manajer.laporan_nasabah','manajer.laporan_nasabah_filter']) }}"><a href="{{ route('manajer.laporan_nasabah') }}"><i class="fa fa-circle-o"></i>Data Investor/Nasabah</a></li>
            <li class="{{ set_active(['manajer.data_saham_nasabah','manajer.laporan_saham_filter']) }}"><a href="{{ route('manajer.data_saham_nasabah') }}"><i class="fa fa-circle-o"></i>Rekening/Saham Nasabah</a></li>
            {{-- <li class=""><a href="{{ route('manajer.verifikasi_data_investor') }}"><i class="fa fa-circle-o"></i>Data Agen Penjualan Aktif</a></li> --}}
        </ul>
    </li>

    <li class="treeview {{ set_active(['manajer.laporan_institusi','manajer.laporan_institusi_filter','manajer.data_saham_nasabah','manajer.laporan_saham_filter']) }}">
        <a href="#">
            <i class="fa fa-pie-chart"></i> <span>Laporan Non Perorangan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu ">
            <li class="{{ set_active(['manajer.laporan_institusi','manajer.laporan_institusi_filter']) }}"><a href="{{ route('manajer.laporan_institusi') }}"><i class="fa fa-circle-o"></i>Data Investor/Nasabah</a></li>
            <li class="{{ set_active(['manajer.data_saham_institusi','manajer.laporan_saham__institusi_filter']) }}"><a href="{{ route('manajer.data_saham_institusi') }}"><i class="fa fa-circle-o"></i>Rekening/Saham Nasabah</a></li>
            {{-- <li class=""><a href="{{ route('manajer.verifikasi_data_investor') }}"><i class="fa fa-circle-o"></i>Data Agen Penjualan Aktif</a></li> --}}
        </ul>
    </li>

    <li class="header" style="font-weight:bold;">PENGATURAN</li>
    <li class="{{ set_active('manajer.manajemen_agen_pemasaran') }}">
        <a href="{{ route('manajer.manajemen_agen_pemasaran') }}">
            <i class="fa fa-users"></i> <span>Data Agen Pemasaran</span>
        </a>
    </li>

    <li class="{{ set_active('manajer.manajemen_pejabat_berwenang') }}">
        <a href="{{ route('manajer.manajemen_pejabat_berwenang') }}">
            <i class="fa fa-users"></i> <span>Data Pejabat Berwenang</span>
        </a>
    </li>

    <li class="{{ set_active('manajer.manajemen_ketua_koperasi') }}">
        <a href="{{ route('manajer.manajemen_ketua_koperasi') }}">
            <i class="fa fa-users"></i> <span>Data Ketua Koperasi</span>
        </a>
    </li>

    <li class="header" style="font-weight:bold;">BACKUP DATA</li>
    <li class="{{ set_active('manajer.backup_data') }}">
        <a href="{{ route('manajer.backup_data') }}">
            <i class="fa fa-cloud"></i> <span>Backup Data</span>
        </a>
    </li>

    <li class="">
        <a data-toggle="control-sidebar" href="{{ route('logout') }}" style="color:red;"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off"></i>&nbsp; {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
@endcan
