<!DOCTYPE html>
<html>
<head>
	<title>Pengisian Data Pasien | Rumah Sakit Jaya</title>
	<link rel="stylesheet"  href="../style.css">
</head>

<body>
	<header>
		<h3>Formuliar Data Pasien</h3>
	</header>
	
	<form action="pasien_masuk.php" method="POST">
		
		<fieldset>
		<div class="input">
		
			<label for="nama_pasien">Nama: </label>
			<input type="text" name="nama" />
		
			<label for="alamat_pasien">Alamat: </label>
			<textarea name="alamat" ></textarea>
		
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label style="display: inline"><input type="radio" name="jenis_kelamin" value="L"> Laki-laki</label>
			<label style="display: inline"><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>
		
			<label for="tanggal_lahir">Tanggal Lahir: </label>
			<input type="date" name="tanggal_lahir" />
		
			<label for="penyakit">Penyakit: </label>
			<input type="text" name="penyakit" />
		
			<label for="id_dokter">ID Dokter: </label>
			<input type="text" name="id_dokter"  />
		
			<label for="id_obat">ID Obat: </label>
			<input type="text" name="id_obat"  />
		
			<label for="id_kamar">ID Kamar: </label>
			<input type="text" name="id_kamar" />
		
			<input type="submit" class = "button" value="Daftar" name="daftar" />

		</div>
		</fieldset>
	</form>
	
	</body>
</html>
