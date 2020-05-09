
 <?php 


            	if(isset($_POST['submit']))
				{
					// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$pesan='<div class="text text-danger">username / password tidak sinkron</div>';
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$absen = $_POST['absen'];
echo '<div class="text text-danger">username / password tidak sinkron</div>';
// menginput data ke database
mysqli_query($koneksi,"insert into data values('','$nama','$kelas','$absen')");

// mengalihkan halaman kembali ke index.php
header("location:reffeal");
				}

 ?>