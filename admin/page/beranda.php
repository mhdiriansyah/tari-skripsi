<?php
    $layanan = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbl_layanan"));
    $distrik = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbl_distrik"));
    $jenislayanan = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbl_jenislayanan"));
?>
<section class="content-header">
    <h1>Beranda</h1>
    <ol class="breadcrumb">
        <li><a href="?page=beranda"><i class="fa fa-dashboard"></i> Beranda</a></li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?= $layanan ?></h3>
                            <p>Layanan</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-map"></i>
                        </div>
                        <a href="?page=layanan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?= $distrik ?></h3>
                            <p>Distrik</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-map-pin"></i>
                        </div>
                        <a href="?page=distrik" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3><?= $jenislayanan ?></h3>
                            <p>Jenis Layanan</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-map-o"></i>
                        </div>
                        <a href="?page=jenislayanan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
