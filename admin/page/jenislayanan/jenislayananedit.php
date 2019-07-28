<?php 
    $sql = mysqli_query($conn, "SELECT * FROM tbl_jenislayanan WHERE id_jenislayanan='$_GET[id]'");
    $data = mysqli_fetch_array($sql);
?>
<section class="content-header">
    <h1>Manajemen Jenis Layanan</h1>
    <ol class="breadcrumb">
        <li><a href="?page=beranda"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Manajemen Jenis Layanan</a></li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Jenis Layanan</b> | Edit</h3>
                </div>
                <div class="box-body">
                    <form action="?page=jenislayananeditpro" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="form-group">
                                <label>ID Jenis Layanan</label><br>
                                <input type="hidden" name="id" value="<?= $data['id_jenislayanan'] ?>">
                                <span class="label label-success"><?= $data['id_jenislayanan'] ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Nama Jenis Layanan</label>
                                <input type="text" class="form-control" name="nama" placeholder="masukkan nama jenis layanan ..." autocomplete="off" value="<?= $data['nama_jenis_layanan'] ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                    <a href="?page=jenislayanan" class="btn btn-danger">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>