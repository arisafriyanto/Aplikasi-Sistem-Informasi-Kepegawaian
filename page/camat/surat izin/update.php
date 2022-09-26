<?php 

	$id_keperluan = $_GET['id_keperluan'];
	$setuju = $_GET['setuju'];

	$sql = mysqli_query($conn, "update keperluan set setuju='1' where id_keperluan='$id_keperluan' ");


?>
	<script type="text/javascript">
		alert("Surat Izin Disetujui Oleh Camat");
		window.location.href="?page=surat_izin";
	</script>
<?php 

	

?>