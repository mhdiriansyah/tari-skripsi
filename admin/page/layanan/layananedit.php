<?php 
    $sql = mysqli_query($conn, "SELECT * FROM tbl_layanan WHERE id_layanan='$_GET[id]'");
    $data = mysqli_fetch_array($sql);
?>
<section class="content-header">
    <h1>Manajemen Layanan</h1>
    <ol class="breadcrumb">
        <li><a href="?page=beranda"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Manajemen Layanan</a></li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Layanan</b> | Edit</h3>
                </div>
                <div class="box-body">
                    <form action="?page=layananeditpro" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="form-group">
                                <label>ID Layanan</label><br>
                                <input type="hidden" name="id" value="<?= $data['id_layanan'] ?>">
                                <span class="label label-primary"><?= $data['id_layanan'] ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Nama Layanan</label>
                                <input type="text" class="form-control" name="nama" placeholder="masukkan nama layanan ..." autocomplete="off" value="<?= $data['nama_layanan'] ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Jenis Layanan</label>
                                <select class="form-control" name="jenislayanan">
                                <option style="display:none;">-- pilih salah satu --</option>
                                <?php 
                                    $sql = mysqli_query($conn, "SELECT * FROM tbl_jenislayanan");
                                    while($datas = mysqli_fetch_array($sql)){ ?>
                                        <option value="<?= $datas['id_jenislayanan'] ?>"<?= ($datas['id_jenislayanan'] == $data['id_jenislayanan']) ? 'selected' : '' ?>><?= $datas['nama_jenis_layanan'] ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Distrik</label>
                                <select class="form-control" name="distrik">
                                <option style="display:none;">-- pilih salah satu --</option>
                                <?php 
                                    $sql = mysqli_query($conn, "SELECT * FROM tbl_distrik");
                                    while($datas = mysqli_fetch_array($sql)){ ?>
                                        <option value="<?= $datas['id_distrik'] ?>"<?= ($datas['id_distrik'] == $data['id_distrik']) ? 'selected' : '' ?>><?= $datas['nama_distrik'] ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" class="form-control" name="lat" placeholder="masukkan latitude ..." autocomplete="off" value="<?= $data['lat'] ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Longitude</label>
                                <input type="text" class="form-control" name="lng" placeholder="masukkan longitude ..." autocomplete="off" value="<?= $data['lng'] ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea style="display:none;" name="fileimgold"><?= $data['data_img'] ?></textarea>
                                <textarea class="form-control" name="alamat" placeholder="masukkan alamat ..." autocomplete="off" required><?= $data['alamat_layanan'] ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>File Gambar (Upload Multiple)</label>
                                <input type="file" class="form-control" name="fileimg[]" multiple>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="form-group">
                                <label>Image</label>
                                <?= carousel($data['data_img']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                    <a href="?page=layanan" class="btn btn-danger">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>