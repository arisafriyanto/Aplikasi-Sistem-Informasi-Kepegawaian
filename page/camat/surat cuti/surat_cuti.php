
    	<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Data Surat Cuti</h2><hr>

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
                                                <th scope="col">Nip/Pangkat</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Dari Tanggal</th>
                                                <th scope="col">Sampai Tanggal</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Status</th>
                                                <th style="text-align: center;" scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
                                            $no = 1;
                                            $query = mysqli_query($conn, "select * from keperluan where setuju='0' and keterangan='cuti' ");
                                            while ($data = mysqli_fetch_assoc($query)) {
                                        ?>

                                            <tr style="text-align: center">
                                                <th scope="row"><?=$no++?></th>
                                                <td><?=$data['nama']?></td>
                                                <td><?=$data['nip']?> / <?=$data['pangkat']?></td>
                                                <td><?=$data['tempat']?></td>
                                                <td><?= date("d M Y", strtotime($data['dari_tgl']))?></td>
                                                <td><?= date("d M Y", strtotime($data['sampai_tgl']))?></td>
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
                                                    <a target="_blank" href="../../cetak/permohonan_surat_cuti.php?id_keperluan=<?=$data['id_keperluan']?>" class="btn btn-rounded btn-info btn-xs">
                                                        View
                                                    </a>
                                                    
                                                	<a href="?page=surat_cuti&action=update&id_keperluan=<?=$data['id_keperluan']?>&setuju=<?php echo $data['setuju']?>&nip=<?=$data['nip']?>&jumlah_hari=<?=selisih_tanggal($data['dari_tgl'], $data['sampai_tgl'])?>" class="btn btn-rounded btn-success btn-xs">
                                                		Setuju
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
