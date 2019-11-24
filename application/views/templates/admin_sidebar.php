<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-plane" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-6">Janitra Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : 'class="nav-item"'?>>
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Dashboard -->
    <li <?=$this->uri->segment(1) == 'data_admin' || $this->uri->segment(1) == 'data_customer' || $this->uri->segment(1) == 'data_destination' || $this->uri->segment(1) == 'detail_destination' || $this->uri->segment(1) == 'data_fasilitas' ? 'class="nav-item active"' : 'class="nav-item"'?>>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-desktop" aria-hidden="true"></i>
            <span>Master Data</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data User:</h6>
                <a <?=$this->uri->segment(1) == 'data_admin' ? 'class="collapse-item active"' : 'class="collapse-item"'?> href="<?= base_url('data_admin') ?>">Admin</a>
                <a <?=$this->uri->segment(1) == 'data_customer' ? 'class="collapse-item active"' : 'class="collapse-item"'?> href="<?= base_url('data_customer') ?>">Customers</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Data Paket:</h6>
                <a <?=$this->uri->segment(1) == 'data_destination' ? 'class="collapse-item active"' : 'class="collapse-item"'?> href="<?= base_url('data_destination') ?>">Destination</a>
                <a <?=$this->uri->segment(1) == 'detail_destination' ? 'class="collapse-item active"' : 'class="collapse-item"'?> href="<?= base_url('detail_destination') ?>">Objek Wisata</a>
                <a <?=$this->uri->segment(1) == 'data_fasilitas' ? 'class="collapse-item active"' : 'class="collapse-item"'?> href="<?= base_url('data_fasilitas') ?>">Fasilitas</a>
            </div>
        </div>
    </li>

    <li <?=$this->uri->segment(1) == 'data_paket' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : 'class="nav-item"'?>>
        <a class="nav-link" href="<?= base_url('data_paket') ?>">
            <i class="fas fa-fw fa-gift"></i>
            <span>Paket Wisata</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Transaksi
    </div>

    <li <?=$this->uri->segment(1) == 'pembayaran' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : 'class="nav-item"'?>>
        <a class="nav-link" href="<?= base_url('pembayaran') ?>">
            <i class="fas fa-fw fa-cash-register"></i>
            <span>Data Pembayaran</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Web
    </div>

    <li <?=$this->uri->segment(1) == '#' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : 'class="nav-item"'?>>
        <a class="nav-link" href="<?= base_url('blog') ?>">
            <i class="fab fa-fw fa-blogger-b" aria-hidden="true"></i>
            <span>Blog Daftar Paket</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-fw fa-print" aria-hidden="true"></i>
            <span>Reports</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Sales</a>
                <a class="collapse-item" href="#">Proses</a>
                <a class="collapse-item" href="#">Riwayat</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->