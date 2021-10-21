<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>CRUD karyawan</title>
</head>

<body>
	<nav>
		<a href="index.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM tbl_karyawan";
		$query = mysqli_query($db, $sql);
		
		while($user = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$user['id']."</td>";
			echo "<td>".$user['nama']."</td>";
			echo "<td>".$user['alamat']."</td>";
			echo "<td>".$user['jenis_kelamin']."</td>";
			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$user['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$user['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>
