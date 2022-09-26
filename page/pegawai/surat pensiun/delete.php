<?php 

    $id_keperluan = $_GET['id_keperluan'];

    if(isset($_GET['id_keperluan'])) {

        if(delete_surat_pensiun($_POST) > 0) {

            echo "
					<script>
						alert ('Surat Pensiun Berhasil Dihapus');
						window.location.href='index.php?page=surat_pensiun';
					</script>
				";

        }else{

            echo "
					<script>
						alert ('Surat Pensiun Gagal Dihapus');
						window.location.href='index.php?page=surat_pensiun';
					</script>
				";

        }

    }

?>