<?php
session_start();

if (!isset($_SESSION["logUser"])) {
	header("Location: ../");
	exit;
}

require '../assets/module/koneksi.php';
require '../assets/module/functions.php';

?>
<!DOCTYPE html>
<html>

<head>
	<title>Halaman User</title>
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
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="../assets/css/bootsrap4.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link href="../assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href="../assets/css/style-responsive.css" rel="stylesheet" />
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../assets/css/font.css" type="text/css" />
	<link href="../assets/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/morris.css" type="text/css" />
	<link rel="stylesheet" href="../assets/css/monthly.css">
	<script src="../assets/js/jquery2.0.3.min.js"></script>
	<script src="../assets/js/raphael-min.js"></script>
	<script src="../assets/js/morris.js"></script>
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
		<source src="../assets/images/bg-tech-1.mp4" type="video/webm">
	</video>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="opacity: 0.7 ">
		<div class="container">
			<a href="index.php" class="">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img style="padding-left:25px; padding-top:0px; position: center" width="80" src="../assets/images/bnn.png">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<?php
					$pasien = query("SELECT * FROM user WHERE id = '$_SESSION[logUser]'")[0];
					?>
					<li class="nav-item">
						<a class="nav-link" href="index.php"><span class="fa fa-user"></span> Selamat Datang, <?php echo $pasien['nama'] ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php"><span class="fa fa-home"></span> Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="konsultasi.php"><span class="fa icon-stethoscope"></span> Konsultasi</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" href="about.php"><span class="fa icon-search"></span> About</a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link" href="logout.php"><span class="fa icon-off"></span> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>