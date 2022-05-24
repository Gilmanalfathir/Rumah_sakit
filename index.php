<!DOCTYPE html>
<html>
<head>
	<title>Rumah Sakit Jaya | Praktikum Sistem Database</title>
	<link rel="stylesheet"  href="style.css">
</head>

<body>
	<header>
		<h1 style="text-align: center;">RUMAH SAKIT</h1>
	</header>
	<div id="container">
		<ul>
			<li><a href="pasien/pasien.php"> Daftarkan Pasien </a></li>
			<li><a href="pasien/pasien_list.php"> Pasien Terdata </a></li>
			<li><a href="dokter/dokter_list.php"> Dokter Tersedia </a></li>
			<li><a href="ruangan/ruangan_list.php"> Ruangan Tersedia </a></li>
			<li><a href="obat/obat_list.php"> Obat Tersedia </a></li>
		</ul>
	</div>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p style="text-align: center, font-size:5px;">
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran pasien berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>
