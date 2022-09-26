<?php 


if(!isset($_GET['nip'])) {
    header("location: index.php?page=pegawai_pns");
}

$nip = $_GET['nip'];

$query = mysqli_query($conn, "select * from pegawai where nip='$nip' ");
$query1 = mysqli_query($conn, "select * from admin where nip='$nip' ");


if(mysqli_num_rows($query) < 1) {
    header("location: index.php?page=pegawai_pns");
}


$data = mysqli_fetch_assoc($query);
$admin = mysqli_fetch_assoc($query1);

    if(isset($_POST['update'])) {
		if(update_pns($_POST) > 0) {
			echo "
					<script>
						alert ('Data Pegawai Pns Berhasil Diupdate');
						window.location.href='index.php?page=pegawai_pns';
					</script>
				";
		}else{
			echo "<script>
						alert ('Data Pegawai Pns Gagal Diupdate');
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
	<title>Update Data Pns</title>
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
                    <i class="fab fa-medrt"> Update Data Pegawai Pns</i>
                </h3>
            </div>
            <div class="card">
                <h5 class="card-header">Silahkan Update Data Pegawai Pns</h5>
                <div class="card-body">
                    <form  action="" method="post" enctype="multipart/form-data">
                    
                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Nama</label>
                            <input id="inputText2" type="text" name="nama" value="<?=$data['nama']?>" class="form-control">
                        </div>
                        

                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Nomor Induk Pegawai</label>
                            <input id="inputText2" type="number" name="nip"  value="<?=$data['nip']?>" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Tempat Lahir</label>
                            <input id="inputText2" type="text" name="tempat"  value="<?=$data['tempat']?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Tanggal Lahir</label>
                            <input id="inputText2" type="date" name="tgllhr"  value="<?=$data['tgllhr']?>" class="form-control">
                        </div>

                        <div class="form-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom09">Jenis Kelamin</label>		
                                    <select class="form-control" name="jk" id="">
                                        <option value="<?=$data['jk']?>"><?=$data['jk']?></option>
                                        <option value="Laki - laki">Laki - laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                            </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                            <label for="pangkat" class="col-form-label">Pangkat</label>
                            <input id="pangkat" type="text" name="pangkat" value="<?=$data['pangkat']?>" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Fungsional Umum</label>
                            <input id="inputText2" type="text" name="fu" value="<?=$data['fu']?>" class="form-control">
                        </div>	

                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Pendidikan Akhir</label>
                            <input id="inputText2" type="text" name="pendidikan" value="<?=$data['pendidikan']?>" class="form-control">
                        </div>		

                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Nama Jurusan</label>
                            <input id="inputText2" type="text" name="jurusan" value="<?=$data['jurusan']?>" class="form-control">
                        </div>										

                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Agama</label>
                            <input id="inputText2" type="text" name="agama" value="<?=$data['agama']?>"class="form-control">
                        </div>		

                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Keterangan</label>
                            <input id="inputText2" type="text" name="ket" value="<?=$data['ket']?>"class="form-control">
                        </div>		<br>


                        <div class="form-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Username</label>
                                <input type="text" class="form-control" id="validationCustom03" name="username" value="<?=$admin['username']?>">
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom04">Password</label>
                                <input class="form-control" id="validationCustom04" type="text" name="password" value="<?=$admin['password']?>">
                            </div>
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