<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="<?php if ($_GET['page'] == 'beranda') echo 'active' ?>"><a href="?page=beranda"><i class="fa fa-home"></i> Beranda</a></li>                
                <li class="<?php if ($_GET['page'] == 'layanan') echo 'active' ?>"><a href="?page=layanan">Layanan</a></li>
                <li class="<?php if ($_GET['page'] == 'carilayanan') echo 'active' ?>"><a href="?page=carilayanan">Cari Layanan</a></li>
            </ul>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
            <ul class="nav navbar-nav">
            <li><a href="admin/login.php" target="_blank"><i class="fa fa-sign-in"></i> Login</a></li>
            </ul>
        </div>
        </div>
    </nav>
</header>