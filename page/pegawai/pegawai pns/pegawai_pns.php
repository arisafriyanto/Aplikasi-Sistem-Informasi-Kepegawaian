
    	<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Data Pegawai Pns</h2><hr>

                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                            	</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="datatables">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Nip</th>
                                                <th scope="col">Ttl</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Pangkat</th>
                                                <th scope="col">Fungsional Umum</th>
                                                <th scope="col">Pendidikan Akhir</th>
                                                <th scope="col">Nama Jurusan</th>
                                                <th scope="col">Agama</th>
                                                <th scope="col">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
                                            $no = 1;
                                            $query = mysqli_query($conn, "select * from pegawai where tp='' ");
                                            while ($data = mysqli_fetch_assoc($query)) {
                                        ?>

                                            <tr style="text-align: center">
                                                <th scope="row"><?=$no++?></th>
                                                <td><?=$data['nama']?></td>
                                                <td><?=$data['nip']?></td>
                                                <td><?=$data['tempat']?>, <?= date('d M Y', strtotime( $data['tgllhr'])) ?> </td>
                                                <td><?=$data['jk']?></td>
                                                <td><?=$data['pangkat']?></td>
                                                <td><?=$data['fu']?></td>
                                                <td><?=$data['pendidikan']?></td>
                                                <td><?=$data['jurusan']?></td>
                                                <td><?=$data['agama']?></td>
                                                <td><?=$data['ket']?></td>
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
