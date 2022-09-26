<?php 

    if(isset($_POST['update'])) {
		if(kuota_cuti_pertahun($_POST) > 0) {
			echo "
					<script>
						alert ('Kuota Cuti Pertahun Berhasil Ditambahkan');
						window.location.href='index.php?page=pegawai_pns';
					</script>
				";
		}else{
			echo "<script>
						alert ('Kuota Cuti Pertahun Gagal Ditambahkan');
						window.location.href='index.php?page=pegawai_pns';
					</script>
				";
        }
        
	}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Kuota Cuti Pertahun</title>
</head>
<body>
	

<div class="dashboard-wrapper">
<div class="dashboard-ecommerce">
<div class="container-fluid dashboard-content ">
    <!-- pageheader  -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">

            <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="basicform">
                <h3 class="section-title" style="color: red;">
                    <i class="fab fa-medrt"> Kuota Cuti Pertahun</i>
                </h3>
            </div>
            <div class="card">
                <h5 class="card-header">Silahkan Isi Kuota Cuti Pertahun</h5>
                <div class="card-body">
                    <form  action="" method="post" enctype="multipart/form-data">
                    
                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Kuota Cuti</label>
                            <input id="inputText2" type="text" name="kuota_cuti" class="form-control">
                        </div><br>
                        
                        <div style="float: right;">
                        

                        <button type="reset" class="btn btn-rounded btn-danger btn-sm">
                            <i class="fas fa-sync-alt"> Reset</i>
                        </button>
                        

                        <button type="submit" name="update" class="btn btn-rounded btn-info btn-sm">
                            <i class="fas fa-paper-plane"> Submit</i>
                        </button><br>
                        

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</body>
</html>