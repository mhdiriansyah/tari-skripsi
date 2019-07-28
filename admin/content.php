<?php 

if (isset($_GET['page'])) $page=$_GET['page'];
else $page="beranda";

if ($page == "beranda") include("page/beranda.php");
elseif ($page == "logout") include("page/logout.php");

    // -------------------------- layanan --------------------------
    elseif ($page == "layanan")                 include("page/layanan/layanan.php");
    elseif ($page == "layananadd")              include("page/layanan/layananadd.php");
    elseif ($page == "layananaddpro")           include("page/layanan/layananaddpro.php");
    elseif ($page == "layananedit")             include("page/layanan/layananedit.php");
    elseif ($page == "layananeditpro")          include("page/layanan/layananeditpro.php");
    elseif ($page == "layanandelete")           include("page/layanan/layanandelete.php");

    // -------------------------- distrik --------------------------
    elseif ($page == "distrik")                 include("page/distrik/distrik.php");
    elseif ($page == "distrikadd")              include("page/distrik/distrikadd.php");
    elseif ($page == "distrikaddpro")           include("page/distrik/distrikaddpro.php");
    elseif ($page == "distrikedit")             include("page/distrik/distrikedit.php");
    elseif ($page == "distrikeditpro")          include("page/distrik/distrikeditpro.php");
    elseif ($page == "distrikdelete")           include("page/distrik/distrikdelete.php");

    // -------------------------- jenis layanan --------------------------
    elseif ($page == "jenislayanan")            include("page/jenislayanan/jenislayanan.php");
    elseif ($page == "jenislayananadd")         include("page/jenislayanan/jenislayananadd.php");
    elseif ($page == "jenislayananaddpro")      include("page/jenislayanan/jenislayananaddpro.php");
    elseif ($page == "jenislayananedit")        include("page/jenislayanan/jenislayananedit.php");
    elseif ($page == "jenislayananeditpro")     include("page/jenislayanan/jenislayananeditpro.php");
    elseif ($page == "jenislayanandelete")      include("page/jenislayanan/jenislayanandelete.php");

else echo"Konten tidak ada";

?>