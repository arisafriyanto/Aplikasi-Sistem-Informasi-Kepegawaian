<?php 

    $nip = $_GET['nip'];

    if(isset($_GET['nip'])) {

        if(delete_pns($_POST) > 0) {

            echo "
					<script>
						alert ('Data Pegawai Pns Berhasil Dihapus');
						window.location.href='index.php?page=pegawai_pns';
					</script>
				";

        }else{

            echo "
					<script>
						alert ('Data Pegawai Pns Gagal Dihapus');
						window.location.href='index.php?page=pegawai_pns';
					</script>
				";

        }

    }

?>