<?php

    $nip = $_SESSION['nip']; 

?>
    	<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Data Surat Pensiun</h2><hr>

                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">
                                	<a href="?page=surat_pensiun&action=insert" class="btn btn-rounded btn-success btn-sm">
                                		<i class="fas fa-plus"> Buat Surat Pensiun</i>
                                	</a>
                            	</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="datatables">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Nip</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Tanggal Input</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Status</th>
                                                <th style="text-align: center;" scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
                                            $no = 1;
                                            $query = mysqli_query($conn, "select * from keperluan where nip='$nip' and keterangan='pensiun' ");
                                            while ($data = mysqli_fetch_assoc($query)) {
                                        ?>

                                            <tr style="text-align: center">
                                                <th scope="row"><?=$no++?></th>
                                                <td><?=$data['nama']?></td>
                                                <td><?=$data['nip']?></td>
                                                <td><?=$data['tempat']?></td>
                                                <td><?= date("d M Y", strtotime($data['tgl_input']))?></td>
                                                <td><?=$data['keterangan']?></td>
                                                <td>
                                                    
                                                    <?php
                                                    
                                                        if($data['setuju'] == 0) {
                                                            echo "
                                                            
                                                                    <button class='btn btn-rounded btn-warning btn-xs'>pending</button>
                                                            
                                                                  ";
                                                        }else{
                                                            echo "
                                                            
                                                                    <button class='btn btn-rounded btn-primary btn-xs'>Disetujui</button>
                                                            
                                                                  ";
                                                        }

                                                    ?>

                                                </td>
                                                <td  style="text-align: center;">
                                                	<a href="?page=surat_pensiun&action=update&id_keperluan=<?=$data['id_keperluan']?>" class="btn btn-rounded btn-info btn-xs">
                                                		<i class="fas fa-edit "> Update</i>
                                                	</a>
                                                	<a onclick="return confirm('Apakah Anda Ingin Menghapus Data??')" href="?page=surat_pensiun&action=delete&id_keperluan=<?=$data['id_keperluan']?>" class="btn btn-rounded btn-danger btn-xs">
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
