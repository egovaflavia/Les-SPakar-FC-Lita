<?php

require 'header.php';

if (isset($_POST["btn_edit"])) {
	if (eGejala($_POST) > 0) {
		echo "
          <script>
          alert('Data Berhasil Di edit');
          document.location.href = 'gejala.php';
          </script>";
	} else {
		echo "<script>
	        alert('Data Gagal Di edit');
	        document.location.href = 'gejala.php';
	      </script>";
	}
}

$id = $_GET["id_gejala"];
$gjl = query("SELECT * FROM gejala WHERE id_gejala = '$id'")[0];

?>

<section class="container">
	<div class="panel panel-default" style="opacity: 0.8 ">
		<div class="panel-heading">Edit Gejala</div>
		<div class="panel-body">
			<!-- Sini -->
			<div class="form">
				<form class="cmxform form-horizontal " method="post" action="">
					<div class="form-group ">
						<label for="id" class="control-label col-lg-3">ID Gejala</label>
						<div class="col-lg-6">
							<input class=" form-control" type="text" value="<?= $gjl['id_gejala']; ?>" disabled>
							<input type="hidden" name="id_gejala" value="<?= $gjl['id_gejala']; ?>">
						</div>
					</div>
					<div class="form-group ">
						<label for="nama" class="control-label col-lg-3">Nama Gejala</label>
						<div class="col-lg-6">
							<input class=" form-control" id="nama" name="nm_gejala" type="text" required value="<?= $gjl['nm_gejala']; ?>">
						</div>
					</div>
					<div class="form-group ">
						<label for="cf" class="control-label col-lg-3">Angka CF</label>
						<div class="col-lg-6">
							<input class=" form-control" id="cf" name="cf" type="text" required value="<?= $gjl['cf']; ?>">
						</div>
					</div>
					<!-- <div class="form-group ">
	                                        <label for="curl" class="control-label col-lg-3">URL (optional)</label>
	                                        <div class="col-lg-6">
	                                            <input class="form-control " id="curl" type="url" name="url">
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="ccomment" class="control-label col-lg-3">Your Comment (required)</label>
	                                        <div class="col-lg-6">
	                                            <textarea class="form-control " id="ccomment" name="comment" required=""></textarea>
	                                        </div>
	                                    </div> -->
					<div class="form-group">
						<div class="col-lg-offset-3 col-lg-6">
							<button class="btn btn-primary" name="btn_edit" type="submit">Simpan</button>
							<a href="gejala.php" class="btn btn-default">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php require "footer.php"; ?>