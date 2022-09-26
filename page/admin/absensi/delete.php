<?php 

    $id_absen = $_GET['id_absen'];

    if(isset($_GET['id_absen'])) {

        if(delete_absensi($_POST) > 0) {

            echo "
					<script>
						alert ('Data Absensi Berhasil Dihapus');
						window.location.href='index.php?page=absensi';
					</script>
				";

        }else{

            echo "
					<script>
						alert ('Data Absensi Gagal Dihapus');
						window.location.href='index.php?page=absensi';
					</script>
				";

        }

    }

?>