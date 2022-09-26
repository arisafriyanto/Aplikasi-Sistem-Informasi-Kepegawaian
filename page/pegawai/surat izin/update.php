<?php 

if(!isset($_GET['id_keperluan'])) {
    header("location: index.php?page=surat_izin");
}

$id_keperluan = $_GET['id_keperluan'];

$query = mysqli_query($conn, "select * from keperluan where id_keperluan='$id_keperluan' and keterangan='izin' ");


if(mysqli_num_rows($query) < 1) {
    header("location: index.php?page=surat_izin");
}


$data = mysqli_fetch_assoc($query);
    
    if(isset($_POST['update'])) {
        if(update_surat_izin($_POST) > 0) {
            echo "
            <script>
            alert ('Surat Izin Berhasil Diupdate');
            window.location.href='index.php?page=surat_izin';
            </script>
            ";
		}else{
            echo "<script>
            alert ('Surat Izin Gagal Diupdate');
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
                    <input type="hidden" name="id_keperluan" value="<?=$data['id_keperluan']?>" id="">
                        <div class="form-group">
                            <label for="inputText1" class="col-form-label">Nama</label>
                            <input id="Keterangan" type="text" name="ket" class="form-control" 
                            value="<?=$data['nip']." | ".$data['nama']." | ".$data['tempat']." | ".$data['pangkat']?>" readonly>
                        </div>	
                        
<div class="form-group">
    <label for="dari" class="col-form-label">Dari Tanggal</label>
    <input id="dari" type="date" name="dari_tgl" class="form-control" value="<?=$data['dari_tgl']?>">
</div>									

<div class="form-group">
    <label for="sampai" class="col-form-label">Sampai Tanggal</label>
    <input id="sampai" type="date" name="sampai_tgl" class="form-control" value="<?=$data['sampai_tgl']?>">
</div>									
								

                        <div class="form-group">
                            <label for="tanggal" class="col-form-label">Tanggal Input</label>
                            <input id="tanggal" type="date" name="tgl" class="form-control" value="<?=$data['tgl_input']?>">
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-form-label">Keperluan</label>
                            <input id="ket" type="text" name="keperluan" class="form-control" value="<?=$data['kep']?>">
                        </div>
                        
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