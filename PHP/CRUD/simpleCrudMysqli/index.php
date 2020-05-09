
<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>

	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="add.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>kelas</th>
			<th>absen</th>
			<th>OPSI</th>
		</tr>
		<?php 
		
		$no = 1;
		$data = mysqli_query($koneksi,"select * from data");
		
		while($d = mysqli_fetch_array($data)){
			
			?>
			<!-- <script type="text/javascript">alert('tes:'+"<?php echo $d['nama'];?>")</script> -->
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['kelas']; ?></td>
				<td><?php echo $d['absen']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="delete.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>