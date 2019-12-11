<?php

require 'header.php';

$hasil = query("SELECT * FROM konsultasi ORDER BY id DESC")[0];

$p1 = query("SELECT * FROM penyakit WHERE id_penyakit = 'P01'")[0];
$p2 = query("SELECT * FROM penyakit WHERE id_penyakit = 'P02'")[0];
$p3 = query("SELECT * FROM penyakit WHERE id_penyakit = 'P03'")[0];
$p4 = query("SELECT * FROM penyakit WHERE id_penyakit = 'P04'")[0];
$p5 = query("SELECT * FROM penyakit WHERE id_penyakit = 'P05'")[0];

$sp1 = query("SELECT * FROM solusi WHERE id_penyakit LIKE '%P01%'");
$sp2 = query("SELECT * FROM solusi WHERE id_penyakit LIKE '%P02%'");
$sp3 = query("SELECT * FROM solusi WHERE id_penyakit LIKE '%P03%'");
$sp4 = query("SELECT * FROM solusi WHERE id_penyakit LIKE '%P04%'");
$sp5 = query("SELECT * FROM solusi WHERE id_penyakit LIKE '%P05%'");

?>
<script>
	window.print();
</script>
<section class="container" style="margin-right: 133px;">
	<div style="width: 1170px" class="panel panel-default" style="opacity: 0.8;">
		<div class="panel-heading">Hasil Diagnosa</div>
		<div class="panel-body">
			<h4 class="main-text"> DATA USER</h4>
			<br />
			<div class="container">
				<div class=" form">
					<div class="cmxform form-horizontal ">
						<div class="form-group ">
							ID Pasien : <?= $hasil['id']; ?>
						</div>
						<div class="form-group ">
							Nama : <?= $hasil['nama']; ?>
						</div>
						<div class="form-group ">

							Umur : <?= $hasil['umur']; ?> Tahun
						</div>
						<div class="form-group ">
							Jenis Kelamin : <?= $hasil['jk']; ?>
						</div>
						<div class="form-group ">
							Alamat : <?= $hasil['alamat'] ?>
						</div>
						<div class="form-group ">
							Tanggal Konsultasi : <?= $hasil['tgl'] ?>
						</div>
						<div class="form-group ">
							Tingkat Kepastian : <?= $hasil['hasil_max']; ?> %
						</div>
						<div class="form-group">
							<?php

							if ($hasil['id_penyakit'] === 'P01') {
								echo "<b>Terdiagnosa Penyakit : ";
								echo $p1['nm_penyakit'] . "</b>";
								echo "<br>Yaitu : ";
								echo $p1['ket'] . "</b>";
								echo "<hr style='border: 1px solid black;'><h1>Penanganan yang akan dilakukan : </h1><br>";
								$no = 1;
								foreach ($sp1 as $row) :

									echo $no;
									echo ". ";
									echo $row['solusi'];
									echo "<br>";

									$no++;
								endforeach;
							} elseif ($hasil['id_penyakit'] === 'P02') {
								echo "<b>Terdiagnosa Penyakit : ";
								echo $p2['nm_penyakit'] . "</b>";
								echo "<br>Yaitu : ";
								echo $p2['ket'] . "</b>";
								echo "<hr style='border: 1px solid black;'><h1>Penanganan yang akan dilakukan : </h1><br>";
								$no = 1;
								foreach ($sp2 as $row) :

									echo $no;
									echo ". ";
									echo $row['solusi'];
									echo "<br>";

									$no++;
								endforeach;
							} elseif ($hasil['id_penyakit'] === 'P03') {
								echo "<b>Terdiagnosa Penyakit : ";
								echo $p3['nm_penyakit'] . "</b>";
								echo "<br>Yaitu : ";
								echo $p3['ket'] . "</b>";
								echo "<hr style='border: 1px solid black;'><h1>Penanganan yang akan dilakukan : </h1><br>";
								$no = 1;
								foreach ($sp3 as $row) :

									echo $no;
									echo ". ";
									echo $row['solusi'];
									echo "<br>";

									$no++;
								endforeach;
							} elseif ($hasil['id_penyakit'] === 'P04') {
								echo "<b>Terdiagnosa Penyakit : ";
								echo $p4['nm_penyakit'] . "</b>";
								echo "<br>Yaitu : ";
								echo $p4['ket'] . "</b>";
								echo "<hr style='border: 1px solid black;'><h1>Penanganan yang akan dilakukan : </h1><br>";
								$no = 1;
								foreach ($sp4 as $row) :

									echo $no;
									echo ". ";
									echo $row['solusi'];
									echo "<br>";

									$no++;
								endforeach;
							} elseif ($hasil['id_penyakit'] === 'P05') {
								echo "<b>Terdiagnosa Penyakit : ";
								echo $p5['nm_penyakit'] . "</b>";
								echo "<br>Yaitu : ";
								echo $p5['ket'] . "</b>";
								echo "<hr style='border: 1px solid black;'><h1>Penanganan yang akan dilakukan : </h1><br>";
								$no = 1;
								foreach ($sp5 as $row) :

									echo $no;
									echo ". ";
									echo $row['solusi'];
									echo "<br>";

									$no++;
								endforeach;
							}

							?>

							<!-- <h1>Penanganan yang akan dilakukan :</h1>
												<?php
												$no = 1;
												foreach ($sp7 as $row) :

													echo $no;
													echo ". ";
													echo $row['solusi'];
													echo "<br>";

													$no++;
												endforeach
												?> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

</body>

</html>