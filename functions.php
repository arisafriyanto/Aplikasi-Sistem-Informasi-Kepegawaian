<?php

    $conn = mysqli_connect("localhost", "root", "", "pegawai");



    function register($data) {

        global $conn;

        $level = $data['level'];
        $username = htmlspecialchars($data['username']);
        $nama = htmlspecialchars($data['nama']);
        $password = mysqli_real_escape_string($conn, $data['password']);
        $password2 = mysqli_real_escape_string($conn, $data['password2']);

        if($level == "admin") {

            $sql = mysqli_query($conn, "select username from admin ");
            $data = mysqli_fetch_assoc($sql);

            if($username === @$data['username']) {

                echo "
                        <script>
                            alert ('Username Sudah Digunakan!!');
                            window.location.href='register.php';
                        </script>
                    ";

            }


            if($password != $password2) {

                echo "
                        <script>
                            alert ('Password Harus Sama!!');
                            window.location.href='register.php';
                        </script>
                    ";

                return false;

            }

            
            $result = mysqli_query($conn, "insert into admin values (null, '$username', '$password', '$nama', '$level', '') ");

            return mysqli_affected_rows($conn);

        }else if($level == "camat") {

            $sql = mysqli_query($conn, "select username from admin ");
            $data = mysqli_fetch_assoc($sql);

            if($username === @$data['username']) {

                echo "
                        <script>
                            alert ('Username Sudah Digunakan!!');
                            window.location.href='register.php';
                        </script>
                    ";

            }


            if($password != $password2) {

                echo "
                        <script>
                            alert ('Password Harus Sama!!');
                            window.location.href='register.php';
                        </script>
                    ";

                return false;

            }

            
            $result = mysqli_query($conn, "insert into admin values (null, '$username', '$password', '$nama', '$level', '') ");

            return mysqli_affected_rows($conn);

        }
    }



    function update_register($data) {

        global $conn;

        $id_admin = $data['id_admin'];
        $level = $data['level'];
        $username = htmlspecialchars($data['username']);
        $nama = htmlspecialchars($data['nama']);
        $password = mysqli_real_escape_string($conn, $data['password']);

        if($level == "admin") {

            $sql = mysqli_query($conn, "select username from admin ");
            $data = mysqli_fetch_assoc($sql);

            
            $result = mysqli_query($conn, "update admin set username='$username', password='$password', nama='$nama', level='$level' where id_admin='$id_admin'");

            return mysqli_affected_rows($conn);

        }else if($level == "camat") {

            $sql = mysqli_query($conn, "select username from admin ");
            $data = mysqli_fetch_assoc($sql);


            
            $result = mysqli_query($conn, "update admin set username='$username', password='$password', nama='$nama', level='$level' where id_admin='$id_admin'");

            return mysqli_affected_rows($conn);

        }
    }





    function delete_admin($data)
    {
        global $conn;

        $id_admin = $_GET['id_admin'];

        $query1 = mysqli_query($conn, "delete from admin where id_admin='$id_admin' ");

        return mysqli_affected_rows($conn);
    }



    function tampil($query) {

        global $conn;

        $result = mysqli_query($conn, $query);

        $rows = [];

        while($row = mysqli_fetch_assoc($result)) {

            $rows[] = $row;

        }

        return $rows;

    }





    function tambah_pns($data) {

        global $conn;

        $nama     = ucwords(htmlspecialchars($data['nama']));
        $nip            = $data['nip'];
        $tempat   = ucwords(htmlspecialchars($data['tempat']));
        $tgllhr  = $data['tgllhr'];
        $jk  = htmlspecialchars($data['jk']);
        $pangkat  = htmlspecialchars($data['pangkat']);
        $fu        = ucwords(htmlspecialchars($data['fu']));
        $pendidikan = ucwords(htmlspecialchars($data['pendidikan']));
        $jurusan = ucwords(htmlspecialchars($data['jurusan']));
        $agama          = ucwords(htmlspecialchars($data['agama']));
        $ket          = ucwords(htmlspecialchars($data['ket']));
        $username       = strtolower(stripslashes($data['username']));
        $password       = mysqli_real_escape_string($conn, $data['password']);

        if(empty($nama)) {
            echo "
					<script>
						alert ('Nama Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }else if(empty($nip)) {
            echo "
					<script>
						alert ('Nip Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }else if(empty($tempat)) {
            echo "
					<script>
						alert ('Tempat Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }else if(empty($tgllhr)) {
            echo "
					<script>
						alert ('Tanggal Lahir Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }else if(empty($jk)) {
            echo "
					<script>
						alert ('Jenis Kelamin Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }else if(empty($pangkat)) {
            echo "
					<script>
						alert ('Pangkat Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }else if(empty($fu)) {
            echo "
					<script>
						alert ('Fungsional Umum Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }else if(empty($pendidikan)) {
            echo "
					<script>
						alert ('Pendidkan Akhir Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }else if(empty($jurusan)) {
            echo "
					<script>
						alert ('Jurusan Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }else if(empty($agama)) {
            echo "
					<script>
						alert ('Agama Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }else if(empty($ket)) {
            echo "
					<script>
						alert ('Keterangan Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }else if(empty($username)) {
            echo "
					<script>
						alert ('Username Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }else if(empty($password)) {
            echo "
					<script>
						alert ('Password Harus Diisi');
						window.location.href='index.php?page=pegawai_pns&action=insert';
					</script>
                ";
            return false;
        }

        $query = mysqli_query($conn, "select username from admin where username='$username' ");
        if(mysqli_fetch_assoc($query)) {

            echo "<script>
					alert ('Username Sudah Digunakan');
					window.location.href='index.php?page=pegawai_pns&action=insert';
				</script>";

				return false;

        }



        $result = mysqli_query($conn, "insert into pegawai values 
        (null, '$nip', '$nama', '$tempat', '$tgllhr', '$jk', '$pangkat', '$fu', '$agama', '$pendidikan', '$jurusan', '', '', '', '', '$ket', '12') ");

        $query1 = mysqli_query($conn, "insert into admin values 
        (null, '$username', '$password', '$nama', 'pegawai', '$nip') ");



        return mysqli_affected_rows($conn);


    }






    function update_pns($data) {

        global $conn;

        $nama     = ucwords(htmlspecialchars($data['nama']));
        $nip            = htmlspecialchars($data['nip']);
        $tempat   = ucwords(htmlspecialchars($data['tempat']));
        $tgllhr  = htmlspecialchars($data['tgllhr']);
        $jk  = htmlspecialchars($data['jk']);
        $pangkat  = htmlspecialchars($data['pangkat']);
        $fu        = htmlspecialchars($data['fu']);
        $pendidikan = ucwords(htmlspecialchars($data['pendidikan']));
        $jurusan = ucwords(htmlspecialchars($data['jurusan']));
        $agama          = ucwords(htmlspecialchars($data['agama']));
        $ket          = ucwords(htmlspecialchars($data['ket']));
        $username       = strtolower(stripslashes($data['username']));
        $password       = mysqli_real_escape_string($conn, $data['password']);

        if(empty($nama)) {
            echo "
					<script>
						alert ('Nama Harus Diisi');
						window.location.href='index.php?page=pegawai_pns';
					</script>
                ";
            return false;
        }else if(empty($nip)) {
            echo "
					<script>
						alert ('Nip Harus Diisi');
						window.location.href='index.php?page=pegawai_pns';
					</script>
                ";
            return false;
        }else if(empty($tempat)) {
            echo "
					<script>
						alert ('Tempat Harus Diisi');
						window.location.href='index.php?page=pegawai_pns';
					</script>
                ";
            return false;
        }else if(empty($tgllhr)) {
            echo "
					<script>
						alert ('Tanggal Lahir Harus Diisi');
						window.location.href='index.php?page=pegawai_pns';
					</script>
                ";
            return false;
        }else if(empty($jk)) {
            echo "
					<script>
						alert ('Jenis Kelamin Harus Diisi');
						window.location.href='index.php?page=pegawai_pns';
					</script>
                ";
            return false;
        }else if(empty($fu)) {
            echo "
					<script>
						alert ('Fungsional Umum Harus Diisi');
						window.location.href='index.php?page=pegawai_pns';
					</script>
                ";
            return false;
        }else if(empty($pendidikan)) {
            echo "
					<script>
						alert ('Pendidkan Akhir Harus Diisi');
						window.location.href='index.php?page=pegawai_pns';
					</script>
                ";
            return false;
        }else if(empty($jurusan)) {
            echo "
					<script>
						alert ('Jurusan Harus Diisi');
						window.location.href='index.php?page=pegawai_pns';
					</script>
                ";
            return false;
        }else if(empty($agama)) {
            echo "
					<script>
						alert ('Agama Harus Diisi');
						window.location.href='index.php?page=pegawai_pns';
					</script>
                ";
            return false;
        }else if(empty($ket)) {
            echo "
					<script>
						alert ('Keterangan Harus Diisi');
						window.location.href='index.php?page=pegawai_pns';
					</script>
                ";
            return false;
        }else if(empty($username)) {
            echo "
					<script>
						alert ('Username Harus Diisi');
						window.location.href='index.php?page=pegawai_pns';
					</script>
                ";
            return false;
        }else if(empty($password)) {
            echo "
					<script>
						alert ('Password Harus Diisi');
						window.location.href='index.php?page=pegawai_pns';
					</script>
                ";
            return false;
        }



        $query2 = mysqli_query($conn, "update admin set
        username='$username', password='$password', nama='$nama' where nip='$nip' ");
        
        
        $result1 = mysqli_query($conn, "update absen set 
        nama='$nama', pangkat='$pangkat', jk='$jk', agama='$agama' where nip='$nip' ");
        
        $result2 = mysqli_query($conn, "update keperluan set
        nama='$nama', pangkat='$pangkat', tempat='$tempat' where nip='$nip' ");

    $result = mysqli_query($conn, "update pegawai set 
        nama='$nama', tempat='$tempat', tgllhr='$tgllhr', jk='$jk', pangkat='$pangkat', fu='$fu', agama='$agama', pendidikan='$pendidikan', jurusan='$jurusan', ket='$ket' where nip='$nip' ");
        


        return mysqli_affected_rows($conn);


    }




    function delete_pns($data)
    {
        global $conn;

        $nip = $_GET['nip'];

        $query1 = mysqli_query($conn, "delete from admin where nip='$nip' ");
        $query2 = mysqli_query($conn, "delete from absen where nip='$nip' ");
        $query3 = mysqli_query($conn, "delete from keperluan where nip='$nip' ");
        $query = mysqli_query($conn, "delete from pegawai where nip='$nip' ");

        return mysqli_affected_rows($conn);
    }




    function kuota_cuti_pertahun($data)
    {
        global $conn;

    $kuota_cuti = $data['kuota_cuti'];

    $result = mysqli_query($conn, "update pegawai set kuota_cuti='$kuota_cuti' ");
        
    return mysqli_affected_rows($conn);

    }





    function tambah_honorer($data) {

        global $conn;

        $nama     = ucwords(htmlspecialchars($data['nama']));
        $nip            = $data['nip'];
        $tempat   = ucwords(htmlspecialchars($data['tempat']));
        $tgllhr  = $data['tgllhr'];
        $jk  = htmlspecialchars($data['jk']);
        $pendidikan = ucwords(htmlspecialchars($data['pendidikan']));
        $jurusan = ucwords(htmlspecialchars($data['jurusan']));
        $tp        = htmlspecialchars($data['tp']);
        $pjb        = htmlspecialchars($data['pjb']);
        $biaya        = htmlspecialchars($data['biaya']);
        $status        = htmlspecialchars($data['status']);
        $agama          = ucwords(htmlspecialchars($data['agama']));
        $ket          = ucwords(htmlspecialchars($data['ket']));
        $username       = strtolower(stripslashes($data['username']));
        $password       = mysqli_real_escape_string($conn, $data['password']);

        if(empty($nama)) {
            echo "
					<script>
						alert ('Nama Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($nip)) {
            echo "
					<script>
						alert ('Nip Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($tempat)) {
            echo "
					<script>
						alert ('Tempat Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($tgllhr)) {
            echo "
					<script>
						alert ('Tanggal Lahir Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($jk)) {
            echo "
					<script>
						alert ('Jenis Kelamin Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($pendidikan)) {
            echo "
					<script>
						alert ('Pendidkan Akhir Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($jurusan)) {
            echo "
					<script>
						alert ('Jurusan Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($tp)) {
            echo "
					<script>
						alert ('Tahun Pertama Pengangkatan Honorer Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($pjb)) {
            echo "
					<script>
						alert ('Pejabat Yang Mengangkat Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($biaya)) {
            echo "
					<script>
						alert ('Pembiayaan Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($status)) {
            echo "
					<script>
						alert ('Status Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($agama)) {
            echo "
					<script>
						alert ('Agama Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($ket)) {
            echo "
					<script>
						alert ('Keterangan Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($username)) {
            echo "
					<script>
						alert ('Username Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }else if(empty($password)) {
            echo "
					<script>
						alert ('Password Harus Diisi');
						window.location.href='index.php?page=pegawai_honor&action=insert';
					</script>
                ";
            return false;
        }

        $query = mysqli_query($conn, "select username from admin where username='$username' ");
        if(mysqli_fetch_assoc($query)) {

            echo "<script>
					alert ('Username Sudah Digunakan');
					window.location.href='index.php?page=pegawai_honor&action=insert';
				</script>";

				return false;

        }


        $result = mysqli_query($conn, "insert into pegawai values 
        (null, '$nip', '$nama', '$tempat', '$tgllhr', '$jk', '', '', '$agama', '$pendidikan', '$jurusan', '$tp', '$pjb', '$status', '$biaya', '$ket', '12') ");

        $query1 = mysqli_query($conn, "insert into admin values 
        (null, '$username', '$password', '$nama', 'pegawai', '$nip') ");



        return mysqli_affected_rows($conn);


    }







    function update_honorer($data) {

        global $conn;

        $nama     = ucwords(htmlspecialchars($data['nama']));
        $nip            = $data['nip'];
        $tempat   = ucwords(htmlspecialchars($data['tempat']));
        $tgllhr  = $data['tgllhr'];
        $jk  = htmlspecialchars($data['jk']);
        $pendidikan = ucwords(htmlspecialchars($data['pendidikan']));
        $jurusan = ucwords(htmlspecialchars($data['jurusan']));
        $tp        = htmlspecialchars($data['tp']);
        $pjb        = htmlspecialchars($data['pjb']);
        $biaya        = htmlspecialchars($data['biaya']);
        $status        = htmlspecialchars($data['status']);
        $agama          = ucwords(htmlspecialchars($data['agama']));
        $ket          = ucwords(htmlspecialchars($data['ket']));
        $username       = strtolower(stripslashes($data['username']));
        $password       = mysqli_real_escape_string($conn, $data['password']);

        if(empty($nama)) {
            echo "
					<script>
						alert ('Nama Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($nip)) {
            echo "
					<script>
						alert ('Nip Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($tempat)) {
            echo "
					<script>
						alert ('Tempat Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($tgllhr)) {
            echo "
					<script>
						alert ('Tanggal Lahir Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($jk)) {
            echo "
					<script>
						alert ('Jenis Kelamin Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($pendidikan)) {
            echo "
					<script>
						alert ('Pendidkan Akhir Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($jurusan)) {
            echo "
					<script>
						alert ('Jurusan Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($tp)) {
            echo "
					<script>
						alert ('Tahun Pertama Pengangkatan Honorer Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($pjb)) {
            echo "
					<script>
						alert ('Pejabat Yang Mengangkat Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($biaya)) {
            echo "
					<script>
						alert ('Pembiayaan Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($status)) {
            echo "
					<script>
						alert ('Status Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($agama)) {
            echo "
					<script>
						alert ('Agama Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($ket)) {
            echo "
					<script>
						alert ('Keterangan Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($username)) {
            echo "
					<script>
						alert ('Username Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }else if(empty($password)) {
            echo "
					<script>
						alert ('Password Harus Diisi');
						window.location.href='index.php?page=pegawai_honor';
					</script>
                ";
            return false;
        }

        $query2 = mysqli_query($conn, "update admin set
        username='$username', password='$password', nama='$nama' where nip='$nip' ");
        
        $result1 = mysqli_query($conn, "update absen set 
        nama='$nama', jk='$jk', agama='$agama' where nip='$nip' ");
        
        $result2 = mysqli_query($conn, "update keperluan set
        nama='$nama', tempat='$tempat' where nip='$nip' ");

        $result = mysqli_query($conn, "update pegawai set 
        nama='$nama', tempat='$tempat', tgllhr='$tgllhr', jk='$jk', agama='$agama', pendidikan='$pendidikan', jurusan='$jurusan', tp='$tp', pjb='$pjb', status='$status', biaya='$biaya', ket='$ket' where nip='$nip' ");


        return mysqli_affected_rows($conn);


    }


    function delete_honor($data)
    {
        global $conn;

        $nip = $_GET['nip'];

        $query2 = mysqli_query($conn, "delete from admin where nip='$nip' ");
        $query3 = mysqli_query($conn, "delete from absen where nip='$nip' ");
        $query1 = mysqli_query($conn, "delete from keperluan where nip='$nip' ");
        $query = mysqli_query($conn, "delete from pegawai where nip='$nip' ");

        return mysqli_affected_rows($conn);

    }



    function tambah_absensi($data) {

        global $conn;

        $nama     = $data['nama'];
        $pecah_nama = explode(".", $nama);
        $id_pegawai = $pecah_nama[0];
        $nip = $pecah_nama[1];
        $nama = $pecah_nama[2];
        $pangkat = $pecah_nama[3];
        $jk = $pecah_nama[4];
        $agama = $pecah_nama[5];

        $bulan   = $data['bulan'];
        $hadir  = htmlspecialchars($data['hadir']);
        $izin  = htmlspecialchars($data['izin']);
        $sakit  = htmlspecialchars($data['sakit']);
        $dd  = htmlspecialchars($data['dd']);
        $dl  = htmlspecialchars($data['dl']);
        $cuti  = htmlspecialchars($data['cuti']);
        $tk  = htmlspecialchars($data['tk']);
        $tanggal = $data['tanggal'];



        $result = mysqli_query($conn, "insert into absen values 
        (null, '$id_pegawai', '$nip', '$nama', '$pangkat', '$jk', '$agama', '$hadir', '$izin', '$sakit', '$dd', '$dl', '$cuti', '$tk', '$bulan', '$tanggal') ");


        return mysqli_affected_rows($conn);


    }




    function delete_absensi($data)
    {
        global $conn;

        $id_absen = $_GET['id_absen'];

        $query = mysqli_query($conn, "delete from absen where id_absen='$id_absen' ");

        return mysqli_affected_rows($conn);
    }



    function buat_surat_pensiun($data) {

        global $conn;

        
        $nama = $_POST['nama'];
        $pecah_nama = explode(".", $nama);
        $id_pegawai = $pecah_nama[0];
        $nip = $pecah_nama[1];
        $nama = $pecah_nama[2];
        $alamat = $pecah_nama[3];
        $pangkat = $pecah_nama[4];

        $tgl = $_POST['tgl'];
        $ket = ucwords($_POST['ket']);

        $sqlll = mysqli_query($conn, "insert into keperluan values (null, '$id_pegawai', '$nip', '$nama', '$pangkat', '$alamat', 0, 0, '$tgl','', '$ket', '0') ");

        return mysqli_affected_rows($conn);


    }




    function update_surat_pensiun($data) {

        global $conn;


        $id_keperluan = $_POST['id_keperluan'];
        $tgl = $_POST['tgl'];
        $ket = ucwords($_POST['ket']);

        $sqlll = mysqli_query($conn, "update keperluan set tgl_input='$tgl', keterangan='$ket' where id_keperluan='$id_keperluan'");

        return mysqli_affected_rows($conn);


    }





    function delete_surat_pensiun($data)
    {
        global $conn;

        $id_keperluan = $_GET['id_keperluan'];

        $query = mysqli_query($conn, "delete from keperluan where id_keperluan='$id_keperluan' ");

        return mysqli_affected_rows($conn);
    }





    function buat_surat_izin($data) {

        global $conn;

        
        $nama = $_POST['nama'];
        $pecah_nama = explode(".", $nama);
        $id_pegawai = $pecah_nama[0];
        $nip = $pecah_nama[1];
        $nama = $pecah_nama[2];
        $alamat = $pecah_nama[3];
        $pangkat = $pecah_nama[4];

        $dari_tgl = $_POST['dari_tgl'];
        $sampai_tgl = $_POST['sampai_tgl'];
        $tgl = $_POST['tgl'];
        $kep = ucwords($_POST['kep']);
        $ket = $_POST['ket'];

        $sqlll = mysqli_query($conn, "insert into keperluan values (null, '$id_pegawai', '$nip', '$nama', '$pangkat', '$alamat', '$dari_tgl', '$sampai_tgl', '$tgl','$kep', '$ket', '0') ");

        return mysqli_affected_rows($conn);


    }



    function update_surat_izin($data) {

        global $conn;


        $id_keperluan = $_POST['id_keperluan'];
        $dari_tgl = $_POST['dari_tgl'];
        $sampai_tgl = $_POST['sampai_tgl'];
        $tgl = $_POST['tgl'];
        $keperluan = ucwords($_POST['keperluan']);

        $sqlll = mysqli_query($conn, "update keperluan set dari_tgl='$dari_tgl', sampai_tgl='$sampai_tgl',  tgl_input='$tgl', kep='$keperluan' where id_keperluan='$id_keperluan'");

        return mysqli_affected_rows($conn);


    }



    function delete_surat_izin($data)
    {
        global $conn;

        $id_keperluan = $_GET['id_keperluan'];

        $query = mysqli_query($conn, "delete from keperluan where id_keperluan='$id_keperluan' ");

        return mysqli_affected_rows($conn);
    }




    function buat_surat_cuti($data) {

        global $conn;

        
        $nama = $_POST['nama'];
        $pecah_nama = explode(".", $nama);
        $id_pegawai = $pecah_nama[0];
        $nip = $pecah_nama[1];
        $nama = $pecah_nama[2];
        $alamat = $pecah_nama[3];
        $pangkat = $pecah_nama[4];

        $dari_tgl = $_POST['dari_tgl'];
        $sampai_tgl = $_POST['sampai_tgl'];
        $tgl = $_POST['tgl'];
        $kep = ucwords($_POST['kep']);
        $ket = $_POST['ket'];

        $query = mysqli_query($conn, "select * from pegawai where nip='$nip' ");
        $row = mysqli_fetch_assoc($query);

        $selisih = selisih_tanggal($data['dari_tgl'], $data['sampai_tgl']);

        if($row['kuota_cuti'] == 0 ) {
            echo "
					<script>
						alert ('Mohon Maaf Kuota Cuti Selama 12 Hari Sudah Digunakan Ditahun Ini..');
						window.location.href='index.php?page=surat_cuti';
					</script>
                ";
            return false;
        }else if($row['kuota_cuti'] < $selisih) {
            echo "
					<script>
						alert ('Mohon maaf kuota cuti yang tersisa lebih kecil dari jumlah cuti yang anda ajukan...');
						window.location.href='index.php?page=surat_cuti';
					</script>
                ";
            return false;
        }
        




            $sqlll = mysqli_query($conn, "insert into keperluan values (null, '$id_pegawai', '$nip', '$nama', '$pangkat', '$alamat', '$dari_tgl', '$sampai_tgl', '$tgl','$kep', '$ket', '0') ");

        return mysqli_affected_rows($conn);


    }



    function update_surat_cuti($data) {

        global $conn;


        
        $nama = $_POST['nama'];
        $pecah_nama = explode(".", $nama);
        $nip = $pecah_nama[0];

        $id_keperluan = $_POST['id_keperluan'];
        $dari_tgl = $_POST['dari_tgl'];
        $sampai_tgl = $_POST['sampai_tgl'];
        $tgl = $_POST['tgl'];
        $keperluan = ucwords($_POST['keperluan']);


        $query = mysqli_query($conn, "select * from pegawai where nip='$nip' ");
        $row = mysqli_fetch_assoc($query);

        $selisih = selisih_tanggal($data['dari_tgl'], $data['sampai_tgl']);

        if($row['kuota_cuti'] < $selisih) {
            echo "
					<script>
						alert ('Mohon maaf kuota cuti yang tersisa lebih kecil dari jumlah cuti yang anda ajukan...');
						window.location.href='index.php?page=surat_cuti';
					</script>
                ";
            return false;
        }

        $sqlll = mysqli_query($conn, "update keperluan set dari_tgl='$dari_tgl', sampai_tgl='$sampai_tgl',  tgl_input='$tgl', kep='$keperluan' where id_keperluan='$id_keperluan'");

        return mysqli_affected_rows($conn);


    }




    function delete_surat_cuti($data)
    {
        global $conn;

        $id_keperluan = $_GET['id_keperluan'];

        $query = mysqli_query($conn, "delete from keperluan where id_keperluan='$id_keperluan' ");

        return mysqli_affected_rows($conn);
    }



    function selisih_tanggal($dari_tgl, $sampai_tgl) {

		@$dari_tgl_pecah = explode("-", $dari_tgl);
		@$dari_tgl_pecah = $dari_tgl_pecah[2]."-".$dari_tgl_pecah[1]. "-".$dari_tgl_pecah[0];

		//$tanggal_dateline = tanggal kembali yang ada dalam database

		@$sampai_tgl_pecah = explode("-", $sampai_tgl);
		@$sampai_tgl_pecah = $sampai_tgl_pecah[2]. "-".$sampai_tgl_pecah[1]. "-".$sampai_tgl_pecah[0];

		//$tanggal_kembali = tanggal saat ini

		@$selisih = strtotime($sampai_tgl_pecah)-strtotime($dari_tgl_pecah);

		//strtotime menghitung detik jika tidak ditentukan menghitung dari tahun 01-01-1970 sampai detik sekarang 

		//di atas kita tentukan strtotime pertama kita atur tanggal dateline yaitu tanggal sekarang dan strtotime yang kedua kita atur tanggal yang ada dalam database jika tanggal sekarang = 30-09-2019 dan tanggal didatabase 29-09-2019 kan ada satu pengurangan detik yang sama dengan satu hari = 86400 detik jadi selisih sama dengan selisih dibagi 86400 detik jika bilangannya sama kan dibagi hasilnya satu nah jika waktu sekarang tanggal 01-10-2019 dan didatabase nya 29-09-2019 maka kan ada dua pengurangan 2 hari kita kalikan satu hari berapa detiknya kan satu hari 86400 detik dikali 2 sama dengan 172800 nah 172800 kan selisih detik dari 2 hari kita bagi 172800/86400 = 2 maka selisihnya 2 hari

		@$selisih = $selisih/86400;

		if($selisih >= 1) {
			$hasil_tanggal = $selisih;

			//floor untuk membulatkan nilai kurang kebawah ceil membulatkan nilai tambah ke atas jadi jika floor detiknya belum sampai 86400 maka tidak akan dibulatkan menjadi satu contohnya ada data 0,5 diceil akan dibulatkan menjadi satu dan floor akan dibulatkan menjadi 0 dan ada data 1,5 di ceil akan dibulatkan menjadi 2 dan di floor akan dibulatkan menjadi 1 jadi jika detiknya baru setelah dari 86400 kan baru setengah hari tidak akan dibulatkan menjadi satu
		}else{
			$hasil_tanggal = 0;

		}

		return $hasil_tanggal;
	}
