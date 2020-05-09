<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	




	<?php
$koneksi = mysqli_connect("localhost","root","","mn_main");

// Check connections
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}


  $sql = mysqli_query($koneksi,"SELECT * FROM kategori INNER JOIN sub_kategori ON kategori.kategori_id = sub_kategori.kategori_id INNER JOIN data_list ON sub_kategori.sub_id = data_list.sub_kategori ORDER BY sub_kategori.kategori_id");

  $jejak="x";
  //$z=0;
  while ($row = $sql->fetch_assoc()) {

//echo "jejak: ".$jejak."<br>";
    echo '<div class="border border-danger p-2">';

    if ($jejak != $row['kategori_nama']) {
      echo '<div class="card-header bg-dark text-white">'.$row['kategori_nama'].'</div>';     
      $jejak = $row['kategori_nama'];
    }
    
   // echo $row['kategori_nama']."<br>";
    echo 'Sub Kategori: '.$row['sub_nama']."<br>";
    echo '-> sub sub judul: '.$row['judul']."<br>";
    echo '</div>';
}

      //$row = mysqli_fetch_assoc($sql);

      //echo $row['kategori_nama'];

    // echo '<ul>';
    // while($row = mysqli_fetch_assoc($sql)){
    //  $kat_id = $row['kategori_id'];
    //  $sql2 = mysqli_query($koneksi,"SELECT * FROM sub_kategori WHERE kategori_id='$kat_id'");
 
    //  echo '<li>'.$row['kategori_nama'];
    //    echo '<ul>';
    //      while($row2 = mysqli_fetch_assoc($sql2)){
    //        echo '<li>'.$row2['sub_nama'].'</li>';
    //      }
    //    echo '</ul>';
    //  echo '</li>';
    // }
    // echo '</ul>';
  
  ?>


</body>
</html>