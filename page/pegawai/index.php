<?php 

    session_start();

    require "../../functions.php";
    

    if(!isset($_SESSION['login'])) {
        header("location: ../../index.php");
    }


?>
<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/libs/css/style.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendor/DataTables/datatables.min.css">
    <title>Sistem Informasi</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <img style="margin-left: 270px" src="../../assets/images/riauu.jpg" width="70px">

                <div class="collapse navbar-collapse " id="navbarSupportedContent">


               <center>
                    <h3 style="margin-left: 70px; margin-top: 10px;">
                    SISTEM INFORMASI KEPEGAWAIAN KANTOR KECAMATAN TANDUN
                    </h3>
                </center>
                        <img style="margin-left: 70px" src="../../assets/images/riauu.jpg" width="70px">
                            <a style="margin-left: 70px" class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img width="50px" src="../../assets/images/user.png" alt="" class=" rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo ucwords($_SESSION['username']); ?> </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="../../logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-white">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>


                            <li class="nav-item ">
                                <a class="nav-link" href="index.php">
                                    <i class="fas fa-home"></i>Dashboard
                                </a>
                            </li>

                            <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">
                                <i class="fas fa-address-book"></i>Data Pegawai
                                </a>

                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="navbar-nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="?page=pegawai_pns"><i class="fas fa-book"></i> Pegawai PNS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?page=pegawai_honor"><i class="fas fa-industry"></i> Pegawai Honor</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">
                                    <i class="fas fa-envelope"></i>Data Surat
                                </a>

                                <div id="submenu-3" class="collapse submenu">
                                    <ul class="navbar-nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="?page=surat_cuti"><i class="fas fa-envelope"></i> Surat Cuti</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?page=surat_pensiun"><i class="fas fa-envelope"></i> Surat Pensiun</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?page=surat_izin"><i class="fas fa-envelope"></i> Surat Izin</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <?php

        @$page = $_GET['page'];
        @$action = $_GET['action'];

        if($page == "") {
            include "home.php";
        }else if($page == "pegawai_pns") {
            if($action == "") {
                include "pegawai pns/pegawai_pns.php";
            }
        }else if($page == "pegawai_honor") {
            if($action == "") {
                include "pegawai honor/pegawai_honor.php";
            }
        }else if($page == "surat_pensiun") {
            if($action == "") {
                include "surat pensiun/surat_pensiun.php";
            }else if($action == "insert") {
                include "surat pensiun/insert.php";
            }else if($action == "update") {
                include "surat pensiun/update.php";
            }else if($action == "delete") {
                include "surat pensiun/delete.php";
            }
        }else if($page == "surat_izin") {
            if($action == "") {
                include "surat izin/surat_izin.php";
            }else if($action == "insert") {
                include "surat izin/insert.php";
            }else if($action == "update") {
                include "surat izin/update.php";
            }else if($action == "delete") {
                include "surat izin/delete.php";
            }
        }else if($page == "surat_cuti") {
            if($action == "") {
                include "surat cuti/surat_cuti.php";
            }else if($action == "insert") {
                include "surat cuti/insert.php";
            }else if($action == "update") {
                include "surat cuti/update.php";
            }else if($action == "delete") {
                include "surat cuti/delete.php";
            }
        }

    ?>
                            
<script src="../../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="../../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="../../assets/libs/js/main-js.js"></script>
<script src="../../assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
<script src="../../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<script src="../../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
<script src="../../assets/vendor/charts/morris-bundle/morris.js"></script>
<script src="../../assets/vendor/charts/c3charts/c3.min.js"></script>
<script src="../../assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="../../assets/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="../../assets/vendor/DataTables/datatables.min.js"></script>
<script src="../../assets/libs/js/dashboard-ecommerce.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatables').DataTable();
            });
        </script>

</body>
</html>