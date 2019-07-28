<?php 
    $get_id = mysqli_query($conn, "SELECT id_jenislayanan FROM tbl_jenislayanan WHERE SUBSTRING(id_jenislayanan,1,6)='JNSLYN'") or die (mysqli_error($conn));
    $trim_id = mysqli_query($conn, "SELECT SUBSTRING(id_jenislayanan,-3,3) as hasil FROM tbl_jenislayanan WHERE SUBSTRING(id_jenislayanan,1,6)='JNSLYN' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
    $hit    = mysqli_num_rows($get_id);
    if ($hit == 0){
        $id_k   = "JNSLYN001";
    } else if ($hit > 0){
        $row    = mysqli_fetch_array($trim_id);
        $kode   = $row['hasil']+1;
        $id_k   = "JNSLYN".str_pad($kode,3,"0",STR_PAD_LEFT); 
    }
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
                    <h3 class="box-title"><b>Jenis Layanan</b> | Tambah</h3>
                </div>
                <div class="box-body">
                <form action="?page=jenislayananaddpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ID Jenis Layanan</label><br>
                                <input type="hidden" name="id" value="<?= $id_k ?>">
                                <span class="label label-success"><?= $id_k ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Jenis Layanan</label>
                                <input type="text" class="form-control" name="nama" placeholder="masukkan nama jenis layanan ..." autocomplete="off" required>
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