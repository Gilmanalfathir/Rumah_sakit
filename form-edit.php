<?php 

include("C:/xampp/htdocs/rumah_sakit/config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: pasien_list.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pasien WHERE id_pasien=$id";
$query = mysqli_query($db, $sql);
$pasien = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Pasien | Rumah Sakit Jaya</title>
	<link rel="stylesheet"  href="../style.css">
</head>

<body>
	<header>
		<h3>Edit Data Pasien</h3>
	</header>
	
	<form action="pasien_edit.php" method="POST">
		
		<fieldset>
			
		<input type="hidden" name="id" value="<?php echo $pasien['id_pasien'] ?>" />
		
		<div class="input">
			<label for="nama_pasien">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $pasien['nama_pasien'] ?>" />
		
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<?php $jk = $pasien['jenis_kelamin']; ?>
			<label style="display: inline"><input type="radio" name="jenis_kelamin" value="L" <?php echo ($jk == 'L') ? "checked": "" ?>> Laki-laki</label>
			<label style="display: inline"><input type="radio" name="jenis_kelamin" value="P" <?php echo ($jk == 'P') ? "checked": "" ?>> Perempuan</label>
		
			<label for="alamat_pasien">Alamat: </label>
			<input type="text" name="alamat" placeholder="alamat" value="<?php echo $pasien['alamat_pasien'] ?>" />
		
			<label for="tangal_lahir">Tanggal Lahir: </label>
			<input type="date" name="tanggal_lahir" placeholder="tanggal_lahir" value="<?php echo $pasien['tanggal_lahir'] ?>" />
		
			<label for="penyakit">Penyakit: </label>
			<input type="text" name="penyakit" placeholder="penyakit" value="<?php echo $pasien['penyakit'] ?>" />
		
			<input type="submit" class = "button" value="Simpan" name="simpan" />
		</div>
		</fieldset>
		
	</form>
	
	</body>
</html>
