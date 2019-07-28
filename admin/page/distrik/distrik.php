<section class="content-header">
    <h1>Manajemen Distrik</h1>
    <ol class="breadcrumb">
        <li><a href="?page=beranda"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a>Manajemen Distrik</a></li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Distrik</b> | List</h3>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="?page=distrikadd">
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
                                    <th>NAMA DISTRIK</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no=1;
                                $sql = mysqli_query($conn, "SELECT * FROM tbl_distrik");
                                while($data = mysqli_fetch_array($sql)){ ?>
                                <tr>
                                    <td><?= $no ?>.</td>
                                    <td><span class="label label-success"><i class="fa fa-map-pin"></i> <?= $data['id_distrik'] ?></spa></td>
                                    <td><?= $data['nama_distrik'] ?></td>
                                    <td>
                                        <a href="?page=distrikedit&id=<?= $data['id_distrik'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
                                        <a href="?page=distrikdelete&id=<?= $data['id_distrik'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
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