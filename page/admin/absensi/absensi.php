
    	<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Data Absensi</h2><hr>

                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">
                                	<a href="?page=absensi&action=insert" class="btn btn-rounded btn-secondary btn-sm">
                                		<i class="fas fa-user-plus"> Tambah Data</i>
                                	</a>
                            	</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="datatables">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Pegawai</th>
                                                <th scope="col">Nip/Pangkat</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Bulan</th>
                                                <th style="text-align: center;" scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
                                            $no = 1;
                                            $query = mysqli_query($conn, "select * from absen");
                                            while ($data = mysqli_fetch_assoc($query)) {
                                        ?>

                                            <tr style="text-align: center">
                                                <th scope="row"><?=$no++?></th>
                                                <td><?=$data['nama']?></td>
                                                <td><?=$data['nip']?>  <?=$data['pangkat']?></td>
                                                <td><?=$data['jk']?></td>
                                                <td><?=$data['bulan']?></td>
                                                <td  style="text-align: center;">
                                                	<a href="?page=absensi&action=update&id_absen=<?=$data['id_absen']?>" class="btn btn-rounded btn-info btn-xs">
                                                		<i class="fas fa-edit "> Update</i>
                                                	</a>
                                                	<a onclick="return confirm('Apakah Anda Ingin Menghapus Data??')" href="?page=absensi&action=delete&id_absen=<?=$data['id_absen']?>" class="btn btn-rounded btn-danger btn-xs">
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
