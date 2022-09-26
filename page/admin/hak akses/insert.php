<?php 

    if(isset($_POST['insert'])) {
		if(register($_POST) > 0) {
			echo "
					<script>
						alert ('Register Berhasil Silahkan Login');
						window.location.href='index.php?page=hak_akses';
					</script>
				";
		}else{
			echo "<script>
						alert ('Register Gagal Tidak Bisa Login');
						window.location.href='index.php?page=hak_akses';
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
	<title>Tambah Hak Akses</title>
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
                    <i class="fab fa-medrt"> Tambah Hak Akses</i>
                </h3>
            </div>
            <div class="card">
                <h5 class="card-header">Silahkan Isi Data Hak Akses</h5>
                <div class="card-body">
                    <form  action="" method="post" enctype="multipart/form-data">


                        <div class="form-group">
                            <label for="inputText1" class="col-form-label">Hak Akses</label>
                            <select name="level" id="" class="form-control">
                                <option value="admin">admin</option>
                                <option value="camat">camat</option>
                            </select>
                        </div> 

                        <div class="form-group">
                            <label for="inputText1" class="col-form-label">Username</label>
                            <input id="inputText1" type="text" name="username" placeholder="username" class="form-control">
                        </div>                        

                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Password</label>
                            <input id="inputText2" type="password" name="password" placeholder="password" class="form-control">
                        </div>                       

                        <div class="form-group">
                            <label for="password_again" class="col-form-label">Password Again</label>
                            <input id="password_again" type="password" name="password2" placeholder="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Nama Lengkap</label>
                            <input id="inputText3" type="text" name="nama" placeholder="nama" class="form-control">
                        </div><br>
                        
                        <div style="float: right;">
                        
                        <button type="submit" name="insert" class="btn btn-rounded btn-info btn-sm">
                            <i class="fas fa-paper-plane"> Submit</i>
                        </button>

                        <button type="reset" class="btn btn-rounded btn-danger btn-sm">
                            <i class="fas fa-sync-alt"> Reset</i>
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