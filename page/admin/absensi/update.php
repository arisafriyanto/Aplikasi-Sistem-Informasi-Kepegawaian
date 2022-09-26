<?php 

if(!isset($_GET['id_absen'])) {
    header("location: index.php?page=absensi");
}

$id_absen = $_GET['id_absen'];

$query = mysqli_query($conn, "select * from absen where id_absen='$id_absen' ");


if(mysqli_num_rows($query) < 1) {
    header("location: index.php?page=absensi");
}


$row = mysqli_fetch_assoc($query);


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Update Data Absensi</title>
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
                    <i class="fab fa-medrt"> Update Data Absensi</i>
                </h3>
            </div>
            <div class="card">
                <h5 class="card-header">Silahkan Update Data Absensi</h5>
                <div class="card-body">
                    <form  action="" method="post" enctype="multipart/form-data">

<?php

    function jumlah_hari($bulan, $tahun) {
        $hasil = date('t', mktime(0,0,0,$bulan, 1, $tahun));
        echo $hasil;
    }

?>
                        
                        <div class="form-group">
                            <label for="bulan" class="col-form-label">Bulan</label>
                            <select class="form-control" name="bulan" id="">
                                <option value="<?=$row['bulan']?>"><?=$row['bulan']?></option>
                                <option value="Januari <?= date("Y"); ?>  <?= jumlah_hari(1,date("Y")) ?> (hari)">Januari <?= date("Y"); ?>  <?= jumlah_hari(1,date("Y")) ?> (hari)</option>
                                <option value="Februari <?= date("Y"); ?>  <?= jumlah_hari(2,date("Y")) ?> (hari)">Februari <?= date("Y"); ?>  <?= jumlah_hari(2,date("Y")) ?> (hari)</option>
                                <option value="Maret <?= date("Y"); ?>  <?= jumlah_hari(3,date("Y")) ?> (hari)">Maret <?= date("Y"); ?>  <?= jumlah_hari(3,date("Y")) ?> (hari)</option>
                                <option value="April <?= date("Y"); ?>  <?= jumlah_hari(4,date("Y")) ?> (hari)">April <?= date("Y"); ?>  <?= jumlah_hari(4,date("Y")) ?> (hari)</option>
                                <option value="Mei <?= date("Y"); ?>  <?= jumlah_hari(5,date("Y")) ?> (hari)">Mei <?= date("Y"); ?>  <?= jumlah_hari(5,date("Y")) ?> (hari)</option>
                                <option value="Juni <?= date("Y"); ?>  <?= jumlah_hari(6,date("Y")) ?> (hari)">Juni <?= date("Y"); ?>  <?= jumlah_hari(6,date("Y")) ?> (hari)</option>
                                <option value="Juli <?= date("Y"); ?>  <?= jumlah_hari(7,date("Y")) ?> (hari)">Juli <?= date("Y"); ?>  <?= jumlah_hari(7,date("Y")) ?> (hari)</option>
                                <option value="Agustus <?= date("Y"); ?>  <?= jumlah_hari(8,date("Y")) ?> (hari)">Agustus <?= date("Y"); ?>  <?= jumlah_hari(8,date("Y")) ?> (hari)</option>
                                <option value="September <?= date("Y"); ?>  <?= jumlah_hari(9,date("Y")) ?> (hari)">September <?= date("Y"); ?>  <?= jumlah_hari(9,date("Y")) ?> (hari)</option>
                                <option value="Oktober <?= date("Y"); ?>  <?= jumlah_hari(10,date("Y")) ?> (hari)">Oktober <?= date("Y"); ?>  <?= jumlah_hari(10,date("Y")) ?> (hari)</option>
                                <option value="November <?= date("Y"); ?>  <?= jumlah_hari(11,date("Y")) ?> (hari)">November <?= date("Y"); ?>  <?= jumlah_hari(11,date("Y")) ?> (hari)</option>
                                <option value="Desember <?= date("Y"); ?>  <?= jumlah_hari(12,date("Y")) ?> (hari)">Desember <?= date("Y"); ?>  <?= jumlah_hari(12,date("Y")) ?> (hari)</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="hadir" class="col-form-label">Hadir</label>
                            <input id="hadir" type="number" name="hadir"  value="<?=$row['hadir']?>"class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="inputText5" class="col-form-label">Izin</label>
                            <input id="inputText5" type="number" name="izin" value="<?=$row['izin']?>"class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputText6" class="col-form-label">Sakit</label>
                            <input id="inputText6" type="number" name="sakit" value="<?=$row['sakit']?>"class="form-control">
                        </div>		

                        <div class="form-group">
                            <label for="inputText7" class="col-form-label">Dinas Daerah</label>
                            <input id="inputText7" type="number" name="dd" value="<?=$row['dd']?>"class="form-control">
                        </div>										

                        <div class="form-group">
                            <label for="inputText8" class="col-form-label">Dinas Luar</label>
                            <input id="inputText8" type="number" name="dl" value="<?=$row['dl']?>"class="form-control">
                        </div>		

                        <div class="form-group">
                            <label for="inputText9" class="col-form-label">Cuti</label>
                            <input id="inputText9" type="number" name="cuti" value="<?=$row['cuti']?>"class="form-control">
                        </div>									

                        <div class="form-group">
                            <label for="ket" class="col-form-label">Tanpa Keterangan</label>
                            <input id="ket" type="number" name="tk" value="<?=$row['tk']?>"class="form-control">
                        </div>									

                        <div class="form-group">
                            <label for="tanggal" class="col-form-label">Tanggal Input</label>
                            <input id="tanggal" type="date" name="tanggal" value="<?=$row['tanggal']?>" class="form-control">
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


                    <?php

                        
    if(isset($_POST['update'])) {
        $id_absen = $_GET['id_absen'];

        $bulan   = $_POST['bulan'];
        $hadir  = $_POST['hadir'];
        $izin  = $_POST['izin'];
        $sakit  = $_POST['sakit'];
        $dd  = $_POST['dd'];
        $dl  = $_POST['dl'];
        $cuti  = $_POST['cuti'];
        $tk  = $_POST['tk'];
        $tanggal = $_POST['tanggal'];

        if($bulan == "") {
            echo "bulan harus diisi";
        }else{

        $result = mysqli_query($conn, "update absen set
        hadir='$hadir', izin='$izin', sakit='$sakit', dd='$dd', dl='$dl', cuti='$cuti', tk='$tk', bulan='$bulan', tanggal='$tanggal' where id_absen=".$id_absen);

        if($result) {
            echo "
					<script>
						alert ('Data Absensi Berhasil Diupdate');
						window.location.href='index.php?page=absensi';
					</script>
				";
        }else{
            echo "
					<script>
						alert ('Data Absensi Gagal Diupdate');
						window.location.href='index.php?page=absensi';
					</script>
				";
        }
        
    }
    }

                    ?>



                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</body>
</html>