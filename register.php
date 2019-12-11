<?php

require 'assets/module/koneksi.php';
require 'assets/module/functions.php';

if (isset($_POST["btn_register"])) {
	if (tUser($_POST) > 0) {
		echo "
          <script>
          alert('Anda Berhasil Registrasi');
          document.location.href = 'index.php';
          </script>";
	} else {
		echo "<script>
	        alert('Anda Gagal Registrasi');
	        document.location.href = 'index.php';
	      </script>";
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
						<h2 style="color: aliceblue">Form Pendaftaran</h2>
						<div class="form-group">
							<label style="color: aliceblue">Username</label>
							<input class="form-control" type="text" name="username" required placeholder="USERNAME">
						</div>
						<div class="form-group">
							<label style="color: aliceblue">Password</label>
							<input class="form-control" type="password" name="password" required placeholder="PASSWORD">
						</div>
						<div class="form-group">
							<label style="color: aliceblue">Confirm Password</label>
							<input class="form-control" type="password" name="password2" required placeholder="KONFIRMASI PASSWORD">
						</div>
						<div class="form-group">
							<label style="color: aliceblue">Nama</label>
							<input class="form-control" type="text" name="nama" required placeholder="NAMA">
						</div>
						<div class="form-group">
							<label style="color: aliceblue">Umur</label>
							<input class="form-control" type="text" name="umur" required placeholder="UMUR">
						</div>
						<div class="form-group">
							<label style="color: aliceblue">Jenis Kelamin : </label>
							<input id="laki" type="radio" name="jk" value="Laki-laki" required> <label for="laki" style="color: aliceblue">Laki-laki</label> &nbsp;&nbsp;&nbsp; <input id="perem" type="radio" name="jk" value="Perempuan" required> <label style="color: aliceblue" for="perem">Perempuan</label>
						</div>
						<div class="form-group">
							<label style="color: aliceblue">Email</label>
							<input class="form-control" type="text" name="email" required placeholder="EMAIL">
						</div>
						<div class="form-group">
							<label style="color: aliceblue">Alamat</label>
							<input class="form-control" type="text" name="alamat" required placeholder="ALAMAT">
						</div>
						<div class="form-group">
							<input type="text" name="level" value="user" hidden>
						</div>
						<div class="form-group">
							<input type="text" name="tgl" value="<?= date('d-m-Y'); ?>" hidden>
						</div>

						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<input class="btn btn-primary" type="submit" value="Daftar" name="btn_register">
						<a href="index.php" class="btn btn-success">Kembali</a>
					</form>
					<br>
					<br>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/jquery.slimscroll.js"></script>
	<script src="assets/js/jquery.nicescroll.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
	<script src="assets/js/jquery.scrollTo.js"></script>
</body>

</html>