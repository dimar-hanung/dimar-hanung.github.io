
<!DOCTYPE html>
<html>
<head>
	<title>testing kalkulator 1</title>
</head>
<body>


<?php include "hitung.php" ?>


<form method="post" action="index.php">
	
<input value="<?php echo $atas; ?>" type="number" name="atas">
<input value="<?php echo $bawah; ?>" type="number" name="bawah">
<input type="submit" name="submit">

</form>




</body>
</html>