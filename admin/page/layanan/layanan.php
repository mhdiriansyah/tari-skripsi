<section class="content-header">
    <h1>Manajemen Layanan</h1>
    <ol class="breadcrumb">
        <li><a href="?page=beranda"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a>Manajemen Layanan</a></li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Layanan</b> | List</h3>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="?page=layananadd">
                            <span class="fa fa-plus-circle"></span> Tambah Data
                        </a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>ID</th>
                                    <th>NAMA LAYANAN</th>
                                    <th>JENIS LAYANAN</th>
                                    <th>DISTRIK</th>
                                    <th>ALAMAT</th>
                                    <th>LAT</th>
                                    <th>LNG</th>
                                    <th>FILE IMG</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no=1;
                                $sql = mysqli_query($conn, "SELECT * FROM tbl_layanan
                                                            JOIN tbl_jenislayanan ON tbl_layanan.id_jenislayanan=tbl_jenislayanan.id_jenislayanan
                                                            JOIN tbl_distrik ON tbl_layanan.id_distrik=tbl_distrik.id_distrik");
                                while($data = mysqli_fetch_array($sql)){ ?>
                                <tr>
                                    <td><?= $no ?>.</td>
                                    <td><span class="label label-success"><i class="fa fa-map"></i> <?= $data['id_layanan'] ?></spa></td>
                                    <td><?= $data['nama_layanan'] ?></td>
                                    <td><span class="label label-info"><?= $data['nama_jenis_layanan'] ?></span></td>
                                    <td><?= $data['nama_distrik'] ?></td>
                                    <td><?= $data['alamat_layanan'] ?></td>
                                    <td><?= $data['lat'] ?></td>
                                    <td><?= $data['lng'] ?></td>
                                    <td><?= sumFileImg($data['data_img']) ?></td>
                                    <td>
                                        <a href="?page=layananedit&id=<?= $data['id_layanan'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
                                        <a href="?page=layanandelete&id=<?= $data['id_layanan'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
                                    </td>
                                </tr>
                            <?php $no++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>