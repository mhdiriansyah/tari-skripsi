<?php 
    $sql = mysqli_query($conn, "SELECT * FROM tbl_distrik WHERE id_distrik='$_GET[id]'");
    $data = mysqli_fetch_array($sql);
?>
<section class="content-header">
    <h1>Manajemen Distrik</h1>
    <ol class="breadcrumb">
        <li><a href="?page=beranda"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Manajemen Distrik</a></li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Distrik</b> | Edit</h3>
                </div>
                <div class="box-body">
                    <form action="?page=distrikeditpro" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="form-group">
                                <label>ID Layanan</label><br>
                                <input type="hidden" name="id" value="<?= $data['id_distrik'] ?>">
                                <span class="label label-success"><?= $data['id_distrik'] ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Nama Distrik</label>
                                <input type="text" class="form-control" name="nama" placeholder="masukkan nama distrik ..." autocomplete="off" value="<?= $data['nama_distrik'] ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                    <a href="?page=distrik" class="btn btn-danger">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>