<div class="content-wrapper">  
  <div class="container">
    <section class="content-header">
      <h1>
        Cari Layanan
        <small>Website Pelayanan Publik Kota Jayapura </small>
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Pencarian Layanan</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable example">
                      <thead>
                          <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>NAMA LAYANAN</th>
                            <th>JENIS LAYANAN</th>
                            <th>DISTRIK</th>
                            <th>ALAMAT</th>
                            <th>AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        $no = 1;
                        $sql = mysqli_query($conn, "SELECT * FROM tbl_layanan
                          JOIN tbl_jenislayanan ON tbl_layanan.id_jenislayanan=tbl_jenislayanan.id_jenislayanan
                          JOIN tbl_distrik ON tbl_layanan.id_distrik=tbl_distrik.id_distrik");
                        while($data = mysqli_fetch_array($sql)){ ?>
                          <tr>
                            <td><?= $no ?>.</td>
                            <td><span class="label label-success"><i class="fa fa-map"></i> <?= $data['id_layanan'] ?></spa></td>
                            <td><?= $data['nama_layanan'] ?></td>
                            <td><span class="label label-info"><?= $data['nama_jenis_layanan'] ?></span></td>
                            <td><?= $data['nama_distrik'] ?></td>
                              <td><?= $data['alamat_layanan'] ?></td>
                            <td>
                                <a href="?page=detaillayanan&id=<?= $data['id_layanan'] ?>" class="btn btn-primary btn-xs">lihat detail</a>
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
        </div>
      </div>
    </section>
  </div>
</div>
<?php 
  include "footer.php";
?>