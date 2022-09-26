<?php 

    $nip = $_SESSION['nip'];

    if(isset($_POST['insert'])) {
		if(buat_surat_izin($_POST) > 0) {
			echo "
					<script>
						alert ('Surat Izin Berhasil Dibuat');
						window.location.href='index.php?page=surat_izin';
					</script>
				";
		}else{
			echo "<script>
						alert ('Data Izin Gagal Dibuat');
						window.location.href='index.php?page=surat_izin';
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
	<title>Data Surat Izin</title>
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
                    <i class="fab fa-medrt"> Data Surat Izin</i>
                </h3>
            </div>
            <div class="card">
                <h5 class="card-header">Silahkan Isi Data Izin</h5>
                <div class="card-body">
                    <form  action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="inputText1" class="col-form-label">Nama</label>
                            <select class="form-control" name="nama" id="">
                                <?php
                                
                                    $sql = mysqli_query($conn, "select * from pegawai where nip='$nip' ");
                                    while ($data = mysqli_fetch_array($sql, MYSQLI_NUM)) {
                                        echo 	"
                                                    <option value='$data[0].$data[1].$data[2].$data[3].$data[6]'>$data[1] | $data[2] | $data[3] | $data[6]</option>
                                                ";
                                    }
                                
                                ?>
                            </select>
                        </div>									

<div class="form-group">
    <label for="tanggal" class="col-form-label">Dari Tanggal</label>
    <input id="tanggal" type="date" name="dari_tgl" class="form-control">
</div>									

<div class="form-group">
    <label for="tanggal" class="col-form-label">Sampai Tanggal</label>
    <input id="tanggal" type="date" name="sampai_tgl" class="form-control">
</div>									

                        <div class="form-group">
                            <label for="tanggal" class="col-form-label">Tanggal Input</label>
                            <input id="tanggal" type="date" name="tgl" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Keperluan" class="col-form-label">Keperluan</label>
                            <input id="Keperluan" type="text" name="kep" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Keterangan" class="col-form-label">Keterangan</label>
                            <input id="Keterangan" type="text" name="ket" class="form-control"  value="izin" readonly>
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