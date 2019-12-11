<?php 

function tUser($data){
global $conn;
$username = strtolower(stripslashes($data["username"]));
$password = mysqli_real_escape_string($conn, $data["password"]);
$password2 = mysqli_real_escape_string($conn, $data["password2"]);
$nama =  htmlspecialchars($data["nama"]);
$umur =  htmlspecialchars($data["umur"]);
$jk =  htmlspecialchars($data["jk"]);
$email =  htmlspecialchars($data["email"]);
$alamat =  htmlspecialchars($data["alamat"]);
$level =  htmlspecialchars($data["level"]);
$tgl =  htmlspecialchars($data["tgl"]);

if ($password !== $password2) {
	echo "<script>
		alert('password tidak terkonfirmasi');
	</script>";
	return false;
	}

	$password = password_hash($password , PASSWORD_DEFAULT);

	mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password','$nama','$umur','$jk','$email','$alamat','$level','$tgl')");
	return mysqli_affected_rows($conn);

}

function tGejala($data){
		global $conn;

		$id_gejala = htmlspecialchars($data["id_gejala"]);
		$nm_gejala = htmlspecialchars($data["nm_gejala"]);
		$cf = htmlspecialchars($data["cf"]);
		
		//query insert data
		$query = "INSERT INTO gejala VALUES ('$id_gejala', '$nm_gejala', '$cf')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

function tPenyakit($data){
		global $conn;

		$id_penyakit = htmlspecialchars($data["id_penyakit"]);
		$nm_penyakit = htmlspecialchars($data["nm_penyakit"]);
        $ket = htmlspecialchars($data["ket"]);
		
		//query insert data
		$query = "INSERT INTO penyakit VALUES ('$id_penyakit', '$nm_penyakit','$ket')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

function tSolusi($data){
		global $conn;

		$id_solusi = htmlspecialchars($data["id_solusi"]);
		$solusi = htmlspecialchars($data["solusi"]);
		$id_penyakit = htmlspecialchars($data["id_penyakit"]);
		
		//query insert data
		$query = "INSERT INTO solusi VALUES ('$id_solusi', '$id_penyakit', '$solusi')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

function eGejala($data){
		global $conn;

		$id_gejala = $data["id_gejala"];
		$nm_gejala = htmlspecialchars($data["nm_gejala"]);
		$cf = htmlspecialchars($data["cf"]);
		
		//query insert data
		$query = "UPDATE gejala SET 
		id_gejala = '$id_gejala',
		nm_gejala = '$nm_gejala',
		cf = '$cf'
		WHERE id_gejala = '$id_gejala'
		";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

function ePenyakit($data){
		global $conn;

		$id_penyakit = $data["id_penyakit"];
		$nm_penyakit = htmlspecialchars($data["nm_penyakit"]);
        $ket = htmlspecialchars($data["ket"]);
		
		//query insert data
		$query = "UPDATE penyakit SET 
		id_penyakit = '$id_penyakit',
		nm_penyakit = '$nm_penyakit'
        ket = '$ket'
		WHERE id_penyakit = '$id_penyakit'
		";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

function eSolusi($data){
		global $conn;

		$id_solusi = $data["id_solusi"];
		$solusi = htmlspecialchars($data["solusi"]);
		$id_penyakit = htmlspecialchars($data["id_penyakit"]);
		
		//query insert data
		$query = "UPDATE solusi SET 
		id_solusi = '$id_solusi',
		solusi = '$solusi',
		id_penyakit = '$id_penyakit'
		WHERE id_solusi = '$id_solusi'
		";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

function hGejala($id_gejala){
	global $conn;
	mysqli_query($conn,"DELETE FROM gejala WHERE id_gejala = '$id_gejala'");
	return mysqli_affected_rows($conn);
}

function hKonsul($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM konsultasi WHERE id = '$id'");
	return mysqli_affected_rows($conn);
}

function hPenyakit($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM penyakit WHERE id_penyakit = '$id'");
	return mysqli_affected_rows($conn);
}

function hSolusi($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM solusi WHERE id_solusi = '$id'");
	return mysqli_affected_rows($conn);
}

function diagnosa($data){
		global $conn;

		$nama =  htmlspecialchars($data["nama"]);
		$umur = htmlspecialchars($data["umur"]);
		$jk = htmlspecialchars($data["jk"]);
		$email = htmlspecialchars($data["email"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$tgl = htmlspecialchars($data["tgl"]);

		$G01 = htmlspecialchars($data["G01"]);
		$G02 = htmlspecialchars($data["G02"]);
		$G03 = htmlspecialchars($data["G03"]);
		$G04 = htmlspecialchars($data["G04"]);
		$G05 = htmlspecialchars($data["G05"]);
		$G06 = htmlspecialchars($data["G06"]);
		$G07 = htmlspecialchars($data["G07"]);
		$G08 = htmlspecialchars($data["G08"]);
		$G09 = htmlspecialchars($data["G09"]);
		$G10 = htmlspecialchars($data["G10"]);
		$G11 = htmlspecialchars($data["G11"]);
		$G12 = htmlspecialchars($data["G12"]);
		$G13 = htmlspecialchars($data["G13"]);
		$G14 = htmlspecialchars($data["G14"]);
		$G15 = htmlspecialchars($data["G15"]);
		$G16 = htmlspecialchars($data["G16"]);
		$G17 = htmlspecialchars($data["G17"]);
		$G18 = htmlspecialchars($data["G18"]);
		$G19 = htmlspecialchars($data["G19"]);
		$G20 = htmlspecialchars($data["G20"]);
		$G21 = htmlspecialchars($data["G21"]);
		$G22 = htmlspecialchars($data["G22"]);
		$G23 = htmlspecialchars($data["G23"]);
		$G24 = htmlspecialchars($data["G24"]);
		$G25 = htmlspecialchars($data["G25"]);
		$G26 = htmlspecialchars($data["G26"]);
		$G27 = htmlspecialchars($data["G27"]);
		$G28 = htmlspecialchars($data["G28"]);
		$G29 = htmlspecialchars($data["G29"]);
		$G30 = htmlspecialchars($data["G30"]);
		$G31 = htmlspecialchars($data["G31"]);
		$G32 = htmlspecialchars($data["G32"]);
		$G33 = htmlspecialchars($data["G33"]);
		$G34 = htmlspecialchars($data["G34"]);
		$G35 = htmlspecialchars($data["G35"]);
		$G36 = htmlspecialchars($data["G36"]);
		$G37 = htmlspecialchars($data["G37"]);
		$G38 = htmlspecialchars($data["G38"]);
		$G39 = htmlspecialchars($data["G39"]);
		$G40 = htmlspecialchars($data["G40"]);
		$G41 = htmlspecialchars($data["G41"]);
		$G42 = htmlspecialchars($data["G42"]);
		$G43 = htmlspecialchars($data["G43"]);
		$G44 = htmlspecialchars($data["G44"]);

		$cfp1 = 0.18;
		$rule1 =(($cfp1 * $G01)+($cfp1 * $G02)+($cfp1 * $G03)+($cfp1 * $G04)+($cfp1 * $G05)+($cfp1 * $G06)+($cfp1 * $G07)+($cfp1 * $G08)+($cfp1 * $G09)+($cfp1 * $G10)+($cfp1 * $G11))*100;

		$cfp2 = 0.26;
		$rule2 = (($cfp2 * $G01)+($cfp2 * $G04)+($cfp2 * $G12)+($cfp2 * $G13)+($cfp1 * $G14)+($cfp1 * $G15)+($cfp1 * $G16)+($cfp1 * $G17))*100;
		
		$cfp3 = 0.18;
		$rule3 = (($cfp3 * $G18)+($cfp3 * $G19)+($cfp3 * $G20)+($cfp3 * $G21)+($cfp1 * $G22)+($cfp1 * $G23)+($cfp1 * $G24)+($cfp1 * $G25)+($cfp1 * $G26)+($cfp1 * $G27)+($cfp1 * $G28)+($cfp1 * $G29))*100;
		
		$cfp4 = 0.12;
		$rule4 = (($cfp4 * $G04)+($cfp4 * $G07)+($cfp4 * $G17)+($cfp4 * $G30)+($cfp4 * $G31)+($cfp4 * $G32)+($cfp4 * $G33)+($cfp1 * $G34)+($cfp1 * $G35)+($cfp1 * $G36)+($cfp1 * $G37)+($cfp1 * $G38)+($cfp1 * $G39))*100;
		
		$cfp5 = 0.14;
		$rule5 = (($cfp5 * $G02)+($cfp5 * $G04)+($cfp5 * $G14)+($cfp5 * $G15)+($cfp5 * $G34)+($cfp5 * $G35)+($cfp1 * $G40)+($cfp1 * $G41)+($cfp1 * $G42)+($cfp1 * $G43)+($cfp1 * $G44))*100;

		$hasil = max($rule1,$rule2,$rule3,$rule4,$rule5);
		// $id_penyakit = '';
		// var_dump($hasil);die;
		if ($hasil === $rule1) {
		$id_penyakit = 'P01';
		$query = $conn->query("INSERT INTO `konsultasi`(`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `rule1`, `rule2`, `rule3`, `rule4`, `rule5`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$rule1','$rule2','$rule3','$rule4','$rule5','$hasil')");
		// var_dump($query); die;
		return mysqli_affected_rows($conn);

		}elseif($hasil === $rule2) {
		$id_penyakit = 'P02';
		$query = $conn->query("INSERT INTO `konsultasi`(`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `rule1`, `rule2`, `rule3`, `rule4`, `rule5`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$rule1','$rule2','$rule3','$rule4','$rule5','$hasil')");

		return mysqli_affected_rows($conn);

		}elseif($hasil === $rule3) {
		$id_penyakit = 'P03';
		$query = $conn->query("INSERT INTO `konsultasi`(`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `rule1`, `rule2`, `rule3`, `rule4`, `rule5`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$rule1','$rule2','$rule3','$rule4','$rule5','$hasil')");

		return mysqli_affected_rows($conn);

		}elseif($hasil === $rule4) {
		$id_penyakit = 'P04';
		$query = $conn->query("INSERT INTO `konsultasi`(`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `rule1`, `rule2`, `rule3`, `rule4`, `rule5`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$rule1','$rule2','$rule3','$rule4','$rule5','$hasil')");

		return mysqli_affected_rows($conn);

		}elseif($hasil === $rule5) {
		$id_penyakit = 'P05';
		$query = $conn->query("INSERT INTO `konsultasi`(`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `rule1`, `rule2`, `rule3`, `rule4`, `rule5`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$rule1','$rule2','$rule3','$rule4','$rule5','$hasil')");

		return mysqli_affected_rows($conn);

		}

	}

 ?>