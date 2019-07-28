<?php 
    $get_id = mysqli_query($conn, "SELECT id_distrik FROM tbl_distrik WHERE SUBSTRING(id_distrik,1,2)='DS'") or die (mysqli_error($conn));
    $trim_id = mysqli_query($conn, "SELECT SUBSTRING(id_distrik,-4,4) as hasil FROM tbl_distrik WHERE SUBSTRING(id_distrik,1,2)='DS' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
    $hit    = mysqli_num_rows($get_id);
    if ($hit == 0){
        $id_k   = "DS0001";
    } else if ($hit > 0){
        $row    = mysqli_fetch_array($trim_id);
        $kode   = $row['hasil']+1;
        $id_k   = "DS".str_pad($kode,4,"0",STR_PAD_LEFT); 
    }
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
                    <h3 class="box-title"><b>Distrik</b> | Tambah</h3>
                </div>
                <div class="box-body">
                <form action="?page=distrikaddpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ID Distrik</label><br>
                                <input type="hidden" name="id" value="<?= $id_k ?>">
                                <span class="label label-success"><?= $id_k ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Distrik</label>
                                <input type="text" class="form-control" name="nama" placeholder="masukkan nama distrik ..." autocomplete="off" required>
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