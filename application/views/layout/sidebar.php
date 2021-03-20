<!-- start Sidebar -->
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo site_url() ?>">DAPODES</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo site_url() ?>">DPD</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item">
                <a href="<?php echo base_url('Home'); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Data</li>
            <li class="nav-item dropdown">
                <a href="<?= site_url('Dataum'); ?>" class="nav-link "><i class="fas fa-database"></i> <span>Data UMKM</span></a>
                <!-- <ul class="dropdown-menu">
                        <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                        <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                        <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                    </ul> -->
            </li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-file"></i> <span>Cetak Data</span></a></li>
            <li class="menu-header">Pengaturan</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link "><i class="fas fa-cog"></i> <span>pengaturan</span></a>
            </li>
        </ul>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>