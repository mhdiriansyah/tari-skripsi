<section class="content-header">
    <h1>Manajemen Layanan</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
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
                    <?php 
                        if (isset($_POST['submit'])){
                            
                            $id         = $_POST['id'];
                            $nama       = $_POST['nama'];
                            $layanan    = $_POST['jenislayanan'];
                            $distrik    = $_POST['distrik'];
                            $lat        = $_POST['lat'];
                            $lng        = $_POST['lng'];
                            $alamat     = $_POST['alamat'];
                            $imgold     = $_POST['fileimgold'];
                            $data       = json_encode($_FILES['fileimg']['name']);

                            foreach ($_FILES['fileimg']['name'] as $key){
                               (empty($key)) ? $status = 'Y' : $status = 'T';
                            }

                            if ($status === 'Y'){
                                $input = mysqli_query($conn,"UPDATE tbl_layanan SET
                                        nama_layanan      = '$nama',
                                        id_jenislayanan   = '$layanan',
                                        id_distrik        = '$distrik',
                                        alamat_layanan    = '$alamat',
                                        lat               = '$lat',
                                        lng               = '$lng'
                                        WHERE id_layanan  = '$id'
                                        ") or die (mysqli_error($conn));
                                if ($input){
                                    echo    '<div class="row"><div class="col-md-12"><div class="alert alert-success alert-dismissible">'.
                                            '<h4><i class="icon fa fa-check"></i> Alert!</h4>'.
                                            'edit data berhasil'.
                                            '</div></div></div>';
                                    echo "<meta http-equiv='refresh' content='1;
                                    url=?page=layanan'>";
                                }
                            } else {
                                if (!empty($imgold)){
                                    foreach(json_decode($imgold) as $row){
                                        unlink("../file/$row");
                                    }
                                }
                                foreach($_FILES['fileimg']['name'] as $key => $val){
                                    move_uploaded_file($_FILES['fileimg']['tmp_name'][$key],"../file/$val");
                                }
                                $input = mysqli_query($conn,"UPDATE tbl_layanan SET
                                        nama_layanan      = '$nama',
                                        id_jenislayanan   = '$layanan',
                                        id_distrik        = '$distrik',
                                        alamat_layanan    = '$alamat',
                                        lat               = '$lat',
                                        lng               = '$lng',
                                        data_img          = '$data'
                                        WHERE id_layanan  = '$id'
                                        ") or die (mysqli_error($conn));
                                if ($input){
                                    echo    '<div class="row"><div class="col-md-12"><div class="alert alert-success alert-dismissible">'.
                                            '<h4><i class="icon fa fa-check"></i> Alert!</h4>'.
                                            'edit data berhasil'.
                                            '</div></div></div>';
                                    echo "<meta http-equiv='refresh' content='1;
                                    url=?page=layanan'>";
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>