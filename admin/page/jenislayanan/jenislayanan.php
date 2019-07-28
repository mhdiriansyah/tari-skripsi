<section class="content-header">
    <h1>Manajemen Jenis Layanan</h1>
    <ol class="breadcrumb">
        <li><a href="?page=beranda"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a>Manajemen Jenis Layanan</a></li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Jenis Layanan</b> | List</h3>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="?page=jenislayananadd">
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
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no=1;
                                $sql = mysqli_query($conn, "SELECT * FROM tbl_jenislayanan");
                                while($data = mysqli_fetch_array($sql)){ ?>
                                <tr>
                                    <td><?= $no ?>.</td>
                                    <td><span class="label label-success"><i class="fa fa-map-pin"></i> <?= $data['id_jenislayanan'] ?></spa></td>
                                    <td><?= $data['nama_jenis_layanan'] ?></td>
                                    <td>
                                        <a href="?page=jenislayananedit&id=<?= $data['id_jenislayanan'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
                                        <a href="?page=jenislayanandelete&id=<?= $data['id_jenislayanan'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
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