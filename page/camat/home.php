

     <!-- wrapper  -->
     <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Dashboard</h2><hr>


                            <div class="row">

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            Data Surat Pensiun
                                        </div>
                                            <div class="card-body">
                                                <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                                    <i class="fas fa-envelope fa-fw fa-sm text-primary"></i>
                                                </div>

                                                <h3>Jumlah</h3>
                                                <h3>

                                                    <?php

                                                        $query = mysqli_query($conn, "select * from keperluan where keterangan='pensiun' ");
                                                        echo $hasil = mysqli_num_rows($query);


                                                    ?>

                                                </h3>

                                            </div>
                                        <div class="card-footer p-0 text-center">
                                            <div class="card-footer-item card-footer-item-bordered">
                                                <a href="?page=surat_pensiun" class="card-link">Lihat Selengkapnya -&raquo;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            Data Surat Cuti
                                        </div>
                                            <div class="card-body">
                                                <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                                    <i class="fas fa-envelope fa-fw fa-sm text-secondary"></i>
                                                </div>

                                                <h3>Jumlah</h3>
                                                <h3>

                                                    <?php

                                                        $query = mysqli_query($conn, "select * from keperluan where keterangan='cuti' ");
                                                        echo $hasil = mysqli_num_rows($query);


                                                    ?>

                                                </h3>

                                            </div>
                                        <div class="card-footer p-0 text-center">
                                            <div class="card-footer-item card-footer-item-bordered">
                                                <a href="?page=surat_cuti" class="card-link">Lihat Selengkapnya -&raquo;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            Data Surat Izin
                                        </div>
                                            <div class="card-body">
                                                <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                                    <i class="fas fa-envelope fa-fw fa-sm text-secondary"></i>
                                                </div>

                                                <h3>Jumlah</h3>
                                                <h3>

                                                    <?php

                                                        $query = mysqli_query($conn, "select * from keperluan where keterangan='izin' ");
                                                        echo $hasil = mysqli_num_rows($query);


                                                    ?>

                                                </h3>

                                            </div>
                                        <div class="card-footer p-0 text-center">
                                            <div class="card-footer-item card-footer-item-bordered">
                                                <a href="?page=surat_izin" class="card-link">Lihat Selengkapnya -&raquo;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
