<?php

require 'header.php';

if (isset($_POST["btn_tambah"])) {
	if (tSolusi($_POST) > 0) {
		echo "
          <script>
          alert('Data Berhasil Ditambah');
          document.location.href = 'solusi.php';
          </script>";
	} else {
		echo "<script>
	        alert('Data Gagal Ditambah');
	        document.location.href = 'solusi.php';
	      </script>";
	}
}

?>

<section class="container">
	<div class="panel panel-default" style="opacity: 0.8 ">
		<div class="panel-heading">Tambah Solusi</div>
		<div class="panel-body">
			<!-- Sini -->
			<div class=" form">
				<form class="cmxform form-horizontal " method="post" action="">
					<div class="form-group ">
						<label for="id" class="control-label col-lg-3">ID Solusi</label>
						<div class="col-lg-6">
							<input class=" form-control" id="id" name="id_solusi" type="text" required>
						</div>
					</div>
					<div class="form-group ">
						<label for="nama" class="control-label col-lg-3">Solusi</label>
						<div class="col-lg-6">
							<input class=" form-control" id="nama" name="solusi" type="text" required>
						</div>
					</div>
					<div class="form-group ">
						<label for="nama" class="control-label col-lg-3">ID Penyakit</label>
						<div class="col-lg-6">
							<input class=" form-control" id="nama" name="id_penyakit" type="text" required>
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
							<button class="btn btn-primary" name="btn_tambah" type="submit">Simpan</button>
							<a href="solusi.php" class="btn btn-default">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php require "footer.php"; ?>