<?php 

    if(isset($_POST['insert'])) {
		if(tambah_honorer($_POST) > 0) {
			echo "
					<script>
						alert ('Data Pegawai Honorer Berhasil Ditambah');
						window.location.href='index.php?page=pegawai_honor';
					</script>
				";
		}else{
			echo "<script>
						alert ('Data Pegawai Honorer Gagal Ditambah');
						window.location.href='index.php?page=pegawai_honor';
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
	<title>Tambah Data Honorer</title>
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
                <h3 class="section-title" style="color: blue;">
                    <i class="fab fa-medrt"> Tambah Data Pegawai Honorer</i>
                </h3>
            </div>
            <div class="card">
                <h5 class="card-header">Silahkan Isi Data Pegawai Honorer</h5>
                <div class="card-body">
                    <form  action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="inputText1" class="col-form-label">Nama</label>
                            <input id="inputText1" type="text" name="nama" placeholder="nama" class="form-control">
                        </div>
                        

                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Nomor Induk Pegawai</label>
                            <input id="inputText2" type="number" name="nip" placeholder="nomor induk pegawai" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Tempat Lahir</label>
                            <input id="inputText3" type="text" name="tempat" placeholder="tempat lahir" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputText4" class="col-form-label">Tanggal Lahir</label>
                            <input id="inputText4" type="date" name="tgllhr" class="form-control">
                        </div>

                        <div class="form-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom09">Jenis Kelamin</label>		
                                    <select class="form-control" name="jk" id="">
                                        <option value="Laki - laki">Laki - laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="inputText10" class="col-form-label">Pendidikan Terakhir</label>
                                <input id="inputText10" type="text" name="pendidikan" placeholder="pendidikan" class="form-control">
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label for="inputText5" class="col-form-label">Jurusan</label>
                            <input id="inputText5" type="text" name="jurusan" placeholder="jurusan" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="inputText5" class="col-form-label">Tahun Pertama Pengangkatan Honorer</label>
                            <input id="inputText5" type="text" name="tp" placeholder="Kpts.800/UM/X/2019/10" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputText6" class="col-form-label">Pejabat Yang Mengangkat</label>
                            <input id="inputText6" type="text" name="pjb" placeholder="CAMAT" class="form-control">
                        </div>		

                        <div class="form-group">
                            <label for="inputText7" class="col-form-label">Pembiayaan</label>
                            <input id="inputText7" type="text" name="biaya" placeholder="pembiayaan" class="form-control">
                        </div>			

                        <div class="form-group">
                                <label for="validationCustom10">Keaktifan Tenaga Honorer</label>
                                    <select class="form-control" name="status" id="">
                                        <option value="Aktif">Aktif</option>
                                        <option value="Non Aktif">Non Aktif</option>
                                    </select>
                        </div>										

                        <div class="form-group">
                            <label for="inputText8" class="col-form-label">Agama</label>
                            <input id="inputText8" type="text" name="agama" placeholder="agama" class="form-control">
                        </div>		

                        <div class="form-group">
                            <label for="inputText9" class="col-form-label">Keterangan</label>
                            <input id="inputText9" type="text" name="ket" placeholder="ket" class="form-control">
                        </div><br>


                        <div class="form-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Username</label>
                                <input type="text" class="form-control" id="validationCustom03" name="username" placeholder="username">
                            </div>


                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom04">Password</label>
                                <input class="form-control" id="validationCustom04" type="password" name="password" placeholder="password">
                            </div>
                        </div><br>
                        
                        <div style="float: right;">
                        

                        <button type="reset" class="btn btn-rounded btn-danger btn-sm">
                            <i class="fas fa-sync-alt"> Reset</i>
                        </button>
                        

                        <button type="submit" name="insert" class="btn btn-rounded btn-info btn-sm">
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