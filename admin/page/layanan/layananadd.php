<?php 
    $get_id = mysqli_query($conn, "SELECT id_layanan FROM tbl_layanan WHERE SUBSTRING(id_layanan,1,3)='LYN'") or die (mysqli_error($conn));
    $trim_id = mysqli_query($conn, "SELECT SUBSTRING(id_layanan,-3,3) as hasil FROM tbl_layanan WHERE SUBSTRING(id_layanan,1,3)='LYN' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
    $hit    = mysqli_num_rows($get_id);
    if ($hit == 0){
        $id_k   = "LYN001";
    } else if ($hit > 0){
        $row    = mysqli_fetch_array($trim_id);
        $kode   = $row['hasil']+1;
        $id_k   = "LYN".str_pad($kode,3,"0",STR_PAD_LEFT); 
    }
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
                    <h3 class="box-title"><b>Layanan</b> | Tambah</h3>
                </div>
                <div class="box-body">
                <form action="?page=layananaddpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ID Layanan</label><br>
                                <input type="hidden" name="id" value="<?= $id_k ?>">
                                <span class="label label-success"><?= $id_k ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Layanan</label>
                                <input type="text" class="form-control" name="nama" placeholder="masukkan nama layanan ..." autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Layanan</label>
                                <select class="form-control" name="jenislayanan">
                                <option style="display:none;">-- pilih salah satu --</option>
                                <?php 
                                    $sql = mysqli_query($conn, "SELECT * FROM tbl_jenislayanan");
                                    while($datas = mysqli_fetch_array($sql)){
                                        echo '<option value="'.$datas['id_jenislayanan'].'">'.$datas['nama_jenis_layanan'].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Distrik</label>
                                <select class="form-control" name="distrik">
                                <option style="display:none;">-- pilih salah satu --</option>
                                <?php 
                                    $sql = mysqli_query($conn, "SELECT * FROM tbl_distrik");
                                    while($datas = mysqli_fetch_array($sql)){
                                        echo '<option value="'.$datas['id_distrik'].'">'.$datas['nama_distrik'].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" class="form-control" name="lat" placeholder="masukkan latitude ..." autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Longitude</label>
                                <input type="text" class="form-control" name="lng" placeholder="masukkan longitude ..." autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="masukkan alamat ..." autocomplete="off" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>File Gambar (Upload Multiple)</label>
                                <input type="file" class="form-control" name="fileimg[]" multiple required>
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