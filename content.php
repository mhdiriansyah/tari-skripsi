<?php 
if (isset($_GET['page'])) $page=$_GET['page'];
else $page="beranda";
    
    if ($page == "beranda")                              include("page/beranda.php");
    elseif ($page == "login")                            include("page/admin/login.php");

    // ------------------------------- menu -------------------------------
    elseif ($page == "layanan")                          include("page/layanan.php");
    elseif ($page == "carilayanan")                      include("page/carilayanan.php");
    elseif ($page == "detaillayanan")                    include("page/detaillayanan.php");

    else "Halaman tidak ditemukan";
?>