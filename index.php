<?php
session_start();

if (isset($_SESSION["logAdmin"])) {
    header("Location: admin/");
    exit;
}
if (isset($_SESSION["logUser"])) {
    header("Location: user/");
    exit;
}

require 'assets/module/koneksi.php';

if (isset($_POST["btn_login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $level = $_POST["level"];

    // echo "<script>
    //                     alert('$username!');
    //                   </script>";

    if ($level === "admin") {
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND level= '$level'");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if (password_verify($password, $row["password"])) {

                $_SESSION["logAdmin"] = $row["id"];
                echo "<script> document.location.href = 'admin/'; </script>";
                exit;
            } else {
                echo "<script>
                    alert('Password Anda Salah!');
                     </script>";
            }
        } else {
            echo "<script>
                        alert('Username Anda Salah!');
                      </script>";
        }
    }
    if ($level === "user") {
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND level= '$level'");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if (password_verify($password, $row["password"])) {

                $_SESSION["logUser"] = $row["id"];
                echo "<script> document.location.href = 'user/'; </script>";
                exit;
            } else {
                echo "<script>
                    alert('Password Anda Salah!');
                     </script>";
            }
        } else {
            echo "<script>
                        alert('Username Anda Salah!');
                      </script>";
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>halaman Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="assets/css/style.css" rel='stylesheet' type='text/css' />
    <link href="assets/css/bootsrap4.css" rel='stylesheet' type='text/css' />
    <link href="assets/css/style-responsive.css" rel="stylesheet" />
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/font.css" type="text/css" />
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <style>
        video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
        }
    </style>
</head>

<body>
    <video autoplay loop poster="" id="bgvid">
        <source src="assets/images/bg-tech-1.mp4" type="video/webm">
    </video>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="">
                    <form action="" method="post">
                        <center>
                            <img width="200" src="assets/images/bnn.webp">
                        </center>
                        <h2 align="center" style="color: aliceblue">Silahkan Login</h2>
                        <div class="form-group">
                            <label style="color: aliceblue">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="USERNAME" required>
                        </div>
                        <div class="form-group">
                            <label style="color: aliceblue">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="PASSWORD" required>
                        </div>
                        <select id="user" name="level" class="form-control">
                            <option>-Level-</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                        <div class="clearfix"></div>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Login" name="btn_login">
                    </form>
                    <br>
                    <p style="color: aliceblue">Belum Punya Akun ? <a href="register.php"> Klik Disini</a></p>
                </div>

            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    </div>

    <script src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>

    <script src="assets/js/jquery.scrollTo.js"></script>
</body>

</html>