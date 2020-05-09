<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$absen = $_POST['absen'];

// update data ke database
mysqli_query($koneksi,"update data set nama='$nama', kelas='$kelas', absen='$absen' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>