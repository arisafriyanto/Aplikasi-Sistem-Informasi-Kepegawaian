<?php 

    session_start();
    
    require "functions.php";


    if(isset($_SESSION['login'])) {

        header("location: page/admin/index.php");

    }



    if(isset($_POST['login'])) {


            $username = $_POST['username'];
            $password = $_POST['password'];
            $level    = $_POST['level'];


                if($level == "admin") {

                    $sql = mysqli_query($conn, "select * from admin where username='$username' and level='$level' ");

                        
                    if(mysqli_num_rows($sql) === 1) {

                        $data = mysqli_fetch_assoc($sql);


                        if($password == $data['password']) {
                            
                            $_SESSION['username'] = $username;

                                if($username = $data['id_admin']) {

                                $_SESSION['login'] = true;
                                $_SESSION['level'] = $level;
                                $_SESSION['id_admin'] = $data['id_admin'];
                                header("location: page/admin/index.php");
                        }

                    }
                }

            

                }else if($level == "camat") {

                    $result = mysqli_query($conn, "select * from admin where username='$username' and level='$level' ");

                    if(mysqli_num_rows($result) === 1) {

                        $row = mysqli_fetch_assoc($result);


                        if($password == $row['password']) {

                            $_SESSION['username'] = $username;

                                if($username = $row['id_admin']) {

                                    $_SESSION['login'] = true;
                                    $_SESSION['level'] = $level;
                                    $_SESSION['id_admin'] = $row['id_admin'];
                                    header("location: page/camat/index.php");
                        }
                    }

                }

                    }else if($level == "pegawai") {

                        $query = mysqli_query($conn, "select * from admin where username='$username' and level='$level' ");

                        if(mysqli_num_rows($query) === 1) {

                            $row = mysqli_fetch_assoc($query);

                            
                        if($password == $row['password']) {

                                $_SESSION['username'] = $username;

                                    if($username = $row['id_admin']) {

                                        $_SESSION['login'] = true;
                                        $_SESSION['level'] = $level;
                                        $_SESSION['nip'] = $row['nip'];
                                        $_SESSION['id_admin'] = $row['id_admin'];
                                        $_SESSION['nama'] = $row['nama'];
                                        header("location: page/pegawai/index.php");
                                    }
                            }

                        }

                    }

                }

?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        body {
				padding: 0px;
				margin: 0px;
                background-image: url(assets/images/si.jpg);
                background-size: cover;
                background-position: center;
			}
    </style>
</head>
<body>

    <div class="splash-container">
        <div class="card ">

            <div class="card-header text-center">
                <span class="splash-description">Aplikasi Sistem Informasi Kepegawaian</span>
                <img width="100px" src="assets/images/riauu.jpg" alt="logo">
            </div>

            <div class="card-body">
                <form action="" method="post">

                <div class="form-group">
                    <select class="form-control" name="level" id="">
                        <option value="admin">admin</option>
                        <option value="camat">camat</option>
                        <option value="pegawai">pegawai</option>
                    </select>
                </div>

                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" name="username" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Password">
                    </div><br><br>
                    
                        <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Sign in</button>


                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                </div>
            </div>
        </div>
    </div>

<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body> 
</html>