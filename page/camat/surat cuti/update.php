<?php 

	$id_keperluan = $_GET['id_keperluan'];
	$setuju = $_GET['setuju'];
	$nip = $_GET['nip'];
	$jumlah_hari = $_GET['jumlah_hari'];

	$sql = mysqli_query($conn, "update keperluan set setuju='1' where id_keperluan='$id_keperluan' ");
	$sqll = mysqli_query($conn, "update pegawai set kuota_cuti=(kuota_cuti-$jumlah_hari) where nip='$nip' ");


?>
	<script type="text/javascript">
		alert("Surat Cuti Disetujui Oleh Camat");
		window.location.href="?page=surat_cuti";
	</script>
<?php 

	

?>