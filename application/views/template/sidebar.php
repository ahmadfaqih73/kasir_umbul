<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Bakat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-close">
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                         Daftar 
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Penjual/index'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nama Penjual</p>
                            </a>
                        </li>
                   
                        <li class="nav-item">
                            <a href="<?= base_url('Daftarjenis/index'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jenis jualan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Daftarharga/index'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar harga</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                           Penjualan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Transaksi/index'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Penjualan/index'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penjualan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Laporan/index'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Laporan/tiapstand'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan tiap stand </p>
                            </a>
                        </li>
                       
                    </ul>
                </li>
                
                
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>