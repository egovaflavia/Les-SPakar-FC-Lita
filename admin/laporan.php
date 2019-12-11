<?php

require 'header.php';

$usr = query("SELECT * FROM user WHERE level = 'user' ORDER BY id ASC");

?>
<section class="container">
	<div class="panel panel-default" style="opacity: 0.8 ">
		<div class="panel-heading">Cetak Laporan Konsultasi</div>
		<div class="panel-body">
			<!-- Sini -->
			<div style="padding: 50px;"><br><br><br>
				<form action="cetLaporan.php" method="get">
					<table class="table table-borderless">
						<tr>
							<td>Pilih Bulan :</td>
							<td>
								<input type="text" name="tgl" class="tanggal form-control" autocomplete="off" required>
							</td>
							<td>
								<button name="btn_cetak" class="btn btn-success btn-block">Cetak</button>
							</td>
						</tr>
					</table>
				</form><br><br><br>
			</div>
		</div>
	</div>
</section>

<?php require "footer.php"; ?>