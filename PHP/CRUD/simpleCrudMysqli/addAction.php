<?php 
// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$absen = $_POST['absen'];

// menginput data ke database
mysqli_query($koneksi,"insert into data values('','$nama','$kelas','$absen')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>