

<!DOCTYPE html>
<html>
<head>
	<title>CRUD karyawan</title>
</head>

<body>
	
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		<a href="list.php">[+] List karyawan</a>
		
		</fieldset>
	
	</form>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	</body>
</html>
