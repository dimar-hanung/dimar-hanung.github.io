<?php
$koneksi = mysqli_connect("localhost","root","","mn_kategori");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
<html>
<head>
	<title>Kategori dan Sub Kategori by TutorialWeb.Net</title>
</head>
<body>
 
	<h2>Tampil Data Kategori</h2>
	<?php
	$sql = mysqli_query($koneksi,"SELECT * FROM kategori LEFT JOIN sub_kategori ON kategori.kategori_id = sub_kategori.kategori_id ORDER BY sub_kategori.kategori_id;");


	$jejak="x";
	while ($row = $sql->fetch_assoc()) {

//echo "jejak: ".$jejak."<br>";
		echo '<div style="background:red">';

		if ($jejak != $row['kategori_nama']) {


			?>
		
			<div style="background: lightblue">---------<?php echo $row['kategori_nama']; ?>---------</div>
		
			<?php

			
			$jejak = $row['kategori_nama'];
		}
		
   //	echo $row['kategori_nama']."<br>";
    echo $row['sub_nama']."<br>";
    echo '</div>';
}

			//$row = mysqli_fetch_assoc($sql);

			//echo $row['kategori_nama'];

		// echo '<ul>';
		// while($row = mysqli_fetch_assoc($sql)){
		// 	$kat_id = $row['kategori_id'];
		// 	$sql2 = mysqli_query($koneksi,"SELECT * FROM sub_kategori WHERE kategori_id='$kat_id'");
 
		// 	echo '<li>'.$row['kategori_nama'];
		// 		echo '<ul>';
		// 			while($row2 = mysqli_fetch_assoc($sql2)){
		// 				echo '<li>'.$row2['sub_nama'].'</li>';
		// 			}
		// 		echo '</ul>';
		// 	echo '</li>';
		// }
		// echo '</ul>';
	
	?>
 
</body>
</html>