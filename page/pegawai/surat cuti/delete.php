<?php 

    $id_keperluan = $_GET['id_keperluan'];

    if(isset($_GET['id_keperluan'])) {

        if(delete_surat_izin($_POST) > 0) {

            echo "
					<script>
						alert ('Surat Cuti Berhasil Dihapus');
						window.location.href='index.php?page=surat_cuti';
					</script>
				";

        }else{

            echo "
					<script>
						alert ('Surat Cuti Gagal Dihapus');
						window.location.href='index.php?page=surat_cuti';
					</script>
				";

        }

    }

?>