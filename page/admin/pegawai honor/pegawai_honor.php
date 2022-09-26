
    	<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Data Pegawai Honor</h2><hr>

                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">
                                	<a href="?page=pegawai_honor&action=insert" class="btn btn-rounded btn-primary btn-sm">
                                		<i class="fas fa-user-plus"> Tambah Data</i>
                                	</a>
                            	</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="datatables">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Ttl</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Pendidikan & Jurusan</th>
                                                <th scope="col">Tahun Pertama Honorer</th>
                                                <th scope="col">Pejabat Yang Mengangkat</th>
                                                <th scope="col">Pembiayaan</th>
                                                <th scope="col">Keaktifan Honorer</th>
                                                <th scope="col">Agama</th>
                                                <th scope="col">Keterangan</th>
                                                <th style="text-align: center;" scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
                                            $no = 1;
                                            $query = mysqli_query($conn, "select * from pegawai where fu='' ");
                                            while ($data = mysqli_fetch_assoc($query)) {
                                        ?>

                                            <tr style="text-align: center">
                                                <th scope="row"><?=$no++?></th>
                                                <td><?=$data['nama']?></td>
                                                <td><?=$data['tempat']?>, <?= date('d M Y', strtotime( $data['tgllhr'])) ?> </td>
                                                <td><?=$data['jk']?></td>
                                                <td><?=$data['pendidikan']?> / <?=$data['jurusan']?></td>
                                                <td><?=$data['tp']?></td>
                                                <td><?=$data['pjb']?></td>
                                                <td><?=$data['biaya']?></td>
                                                <td><?=$data['status']?></td>
                                                <td><?=$data['agama']?></td>
                                                <td><?=$data['ket']?></td>
                                                <td  style="text-align: center;">
                                                	<a href="?page=pegawai_honor&action=update&nip=<?=$data['nip']?>" class="btn btn-rounded btn-info btn-xs">
                                                		<i class="fas fa-edit "> Update</i>
                                                	</a>
                                                	<a onclick="return confirm('Apakah Anda Ingin Menghapus Data??')" href="?page=pegawai_honor&action=delete&nip=<?=$data['nip']?>" class="btn btn-rounded btn-danger btn-xs">
                                                		<i class="fas fa-trash-alt"> Delete</i>
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
