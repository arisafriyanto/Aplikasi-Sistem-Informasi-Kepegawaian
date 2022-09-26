
    	<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Hak Akses</h2><hr>

                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">
                                	<a href="?page=hak_akses&action=insert" class="btn btn-rounded btn-success btn-sm">
                                		<i class="fas fa-user-plus"> Tambah Hak Akses</i>
                                	</a>
                            	</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="datatables">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th scope="col">No</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Password</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Level</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
                                            $no = 1;
                                            $query = mysqli_query($conn, "select * from admin ");
                                            while ($data = mysqli_fetch_assoc($query)) {
                                        ?>

                                            <tr style="text-align: center">
                                                <th scope="row"><?=$no++?></th>
                                                <td><?=$data['username']?></td>
                                                <td><?=$data['password']?></td>
                                                <td><?=$data['nama']?></td>
                                                <td><?=$data['level']?></td>
                                                <td  style="text-align: center;">

                                                <?php

                                                if($data['level'] == "pegawai") {
                                                    
                                                	echo "<a href='?page=hak_akses&action=update&id_admin=$data[id_admin]' class='btn btn-rounded btn-info btn-xs'>
                                                		<i class='fas fa-edit '> Update</i>
                                                    </a>";

                                                }else{

                                                	echo "<a href='?page=hak_akses&action=update&id_admin=$data[id_admin]' class='btn btn-rounded btn-info btn-xs'>
                                                		<i class='fas fa-edit '> Update</i>
                                                    </a>";
                                                    
                                                	echo "<a onclick='return confirm('Apakah Anda Ingin Menghapus Data??')' href='?page=hak_akses&action=delete&id_admin=$data[id_admin]' class='btn btn-rounded btn-danger btn-xs'>
                                                		<i class='fas fa-trash-alt'> Delete</i>
                                                    </a>";

                                                }
                                                    
                                                ?>

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
