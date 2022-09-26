<?php 

    $id_admin = $_GET['id_admin'];

    if(isset($_GET['id_admin'])) {

        if(delete_admin($_POST) > 0) {

            echo "
					<script>
						alert ('Hak akses Berhasil Dihapus');
						window.location.href='index.php?page=hak_akses';
					</script>
				";

        }else{

            echo "
					<script>
						alert ('Hak akses Gagal Dihapus');
						window.location.href='index.php?page=hak_akses';
					</script>
				";

        }

    }

?>