<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Cetak Surat Peringatan</h2><hr>

                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">
                            	</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="datatables">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Nip</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Bulan</th>
                                                <th scope="col">Agama</th>
                                                <th scope="col">Tanpa Keterangan</th>
                                                <th style="text-align: center;" scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
                                            $no = 1;
                                            $sql = mysqli_query($conn, "select * from absen where tk='5' ");
                                            while ($data = mysqli_fetch_assoc($sql)) {
                                        ?>

                                            <tr style="text-align: center">
                                                <th scope="row"><?=$no++?></th>
                                                <td><?=$data['nama']?></td>
                                                <td><?=$data['nip']?></td>
                                                <td><?=$data['jk']?></td>
                                                <td><?=$data['bulan']?></td>
                                                <td><?=$data['agama']?></td>
                                                <td><?=$data['tk']?></td>
                                                <td  style="text-align: center;">
                                                    <a href="../../cetak/cetak_surat_peringatan.php?id_absen=<?=$data['id_absen']?>" target="_blank" class="btn btn-rounded btn-primary btn-sm">
                                                        <i class="fas fa-print"> Print</i>
                                                    </a>
                                                </td>
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
