<?php 


if(!isset($_GET['id_admin'])) {
    header("location: index.php?page=hak_akses");
}

$id_admin = $_GET['id_admin'];

$query = mysqli_query($conn, "select * from admin where id_admin='$id_admin' ");


if(mysqli_num_rows($query) < 1) {
    header("location: index.php?page=hak_akses");
}


$data = mysqli_fetch_assoc($query);


    if(isset($_POST['insert'])) {
		if(update_register($_POST) > 0) {
			echo "
					<script>
						alert ('Hak Akses Berhasil Diupdate');
						window.location.href='index.php?page=hak_akses';
					</script>
				";
		}else{
			echo "<script>
						alert ('Hak Akses Gagal Diupdate');
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
                    <input type="hidden" name="id_admin" value="<?=$data['id_admin']?>" id="">

                        <div class="form-group">
                            <label for="inputText1" class="col-form-label">Hak Akses</label>
                            <select name="level" id="" class="form-control">
                                <option value="<?=$data['level']?>"><?=$data['level']?></option>
                                <option value="admin">admin</option>
                                <option value="camat">camat</option>
                            </select>
                        </div> 

                        <div class="form-group">
                            <label for="inputText1" class="col-form-label">Username</label>
                            <input id="inputText1" type="text" name="username" value="<?=$data['username']?>" class="form-control">
                        </div>                        

                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Password</label>
                            <input id="inputText2" type="text" name="password"  value="<?=$data['password']?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Nama Lengkap</label>
                            <input id="inputText3" type="text" name="nama" value="<?=$data['nama']?>"class="form-control">
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