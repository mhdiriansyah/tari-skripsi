<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU</li>
    <li class="<?php if ($_GET['page'] == 'beranda'){ echo "active";} ?>">
        <a href="?page=beranda">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
        </a>
    </li>
    <li class="<?php if ($_GET['page'] == 'layanan' || $_GET['page'] == 'layananadd' || $_GET['page'] == 'layananaddpro' || $_GET['page'] == 'layananedit'
                || $_GET['page'] == 'layananeditpro' || $_GET['page'] == 'layanandelete'){ echo "active"; } ?>">
        <a href="?page=layanan">
            <i class="fa fa-map"></i><span>Manajemen Layanan</span>
        </a>
    </li>
    <li class="<?php if ($_GET['page'] == 'distrik' || $_GET['page'] == 'distrikadd' || $_GET['page'] == 'distrikaddpro' || $_GET['page'] == 'distrikedit'
                || $_GET['page'] == 'distrikeditpro' || $_GET['page'] == 'distrikdelete'){ echo "active"; } ?>">
        <a href="?page=distrik">
            <i class="fa fa-map-pin"></i><span>Manajemen Distrik</span>
        </a>
    </li>
    <li class="<?php if ($_GET['page'] == 'jenislayanan' || $_GET['page'] == 'jenislayananadd' || $_GET['page'] == 'jenislayananaddpro' || $_GET['page'] == 'jenislayananedit'
                || $_GET['page'] == 'jenislayananeditpro' || $_GET['page'] == 'jenislayanandelete'){ echo "active"; } ?>">
        <a href="?page=jenislayanan">
            <i class="fa fa-map-o"></i><span>Manajemen Jenis Layanan</span>
        </a>
    </li>
</section>