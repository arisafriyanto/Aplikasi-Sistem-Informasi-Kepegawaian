<?php 

    $nip = $_GET['nip'];

    if(isset($_GET['nip'])) {

        if(delete_honor($_POST) > 0) {

            echo "
					<script>
						alert ('Data Pegawai Honor Berhasil Dihapus');
						window.location.href='index.php?page=pegawai_honor';
					</script>
				";

        }else{

            echo "
					<script>
						alert ('Data Pegawai Honor Gagal Dihapus');
						window.location.href='index.php?page=pegawai_honor';
					</script>
				";

        }

    }

?>