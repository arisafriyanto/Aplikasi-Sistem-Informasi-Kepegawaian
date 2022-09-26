
    	<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Laporan Kehadiran Pegawai</h2><hr>

                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">
                                	<a href="../../cetak/laporan_data_absen.php" target="_blank" class="btn btn-rounded btn-primary btn-sm">
                                		<i class="fas fa-print"> Print</i>
                                	</a>
                            	</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="datatables">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Nip/Pangkat</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Agama</th>
                                                <th scope="col">Hadir</th>
                                                <th scope="col">Izin</th>
                                                <th scope="col">Sakit</th>
                                                <th scope="col">Dinas Daerah</th>
                                                <th scope="col">Dinas Luar</th>
                                                <th scope="col">Cuti</th>
                                                <th scope="col">Tanpa Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
                                            $no = 1;
                                            $query = mysqli_query($conn, "select * from absen INNER JOIN pegawai ON absen.id_pegawai = pegawai.id_pegawai ");
                                            while ($data = mysqli_fetch_assoc($query)) {
                                        ?>

                                            <tr style="text-align: center">
                                                <th scope="row"><?=$no++?></th>
                                                <td><?=$data['nama']?></td>
                                                <td><?=$data['nip']?> <?=$data['pangkat']?></td>
                                                <td><?=$data['jk']?></td>
                                                <td><?=$data['agama']?></td>
                                                <td><?=$data['hadir']?></td>
                                                <td><?=$data['izin']?></td>
                                                <td><?=$data['sakit']?></td>
                                                <td><?=$data['dd']?></td>
                                                <td><?=$data['dl']?></td>
                                                <td><?=$data['cuti']?></td>
                                                <td><?=$data['tk']?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                           </table>
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

