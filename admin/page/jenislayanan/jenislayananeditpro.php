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
                    <?php 
                        if (isset($_POST['submit'])){
                            
                            $id         = $_POST['id'];
                            $nama       = $_POST['nama'];

                            $input = mysqli_query($conn,"UPDATE tbl_jenislayanan SET
                                    nama_jenis_layanan      = '$nama'
                                    WHERE id_jenislayanan   = '$id'
                                    ") or die (mysqli_error($conn));
                            if ($input){
                                echo    '<div class="row"><div class="col-md-12"><div class="alert alert-success alert-dismissible">'.
                                        '<h4><i class="icon fa fa-check"></i> Alert!</h4>'.
                                        'edit data berhasil'.
                                        '</div></div></div>';
                                echo "<meta http-equiv='refresh' content='1;
                                url=?page=jenislayanan'>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>