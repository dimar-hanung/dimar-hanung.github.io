<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'config.php';
	$id = $_GET['id'];

	$data = mysqli_query($koneksi,"select * from data where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="editAction.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>"></td>
				</tr>
				<tr>
					<td>Absen</td>
					<td><input type="number" name="absen" value="<?php echo $d['absen']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>