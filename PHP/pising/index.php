<!DOCTYPE html>
<html>
<head>
	<title>skincare-ku</title>
	<script src="asset/jquery-3.4.1.min.js"></script>
	<script src="asset/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="ico.jfif">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		
		.sidebar{
			border:solid black 1px;
		}
		.col-4{
			min-width: 300px;
			margin:auto;
		}.row{
			margin: 2px auto;
		}.harga{
			text-decoration: line-through;
			font-size: 12px;
		}.diskon{
			color: #a31c48;
		}.card-header{
			background: #d71149;
			color: white
		}.badge{
			margin-right:5px;
		}


		/*batas*/

		@charset "UTF-8";
:root {
  --star-size: 20px;
  --star-color: grey;
  --star-background: #fc0;
}

.Stars {
  --percent: calc(var(--rating) / 5 * 100%);
  display: inline-block;
  font-size: var(--star-size);
  font-family: Times;
  line-height: 1;
}
.Stars::before {
  content: '★★★★★';
  letter-spacing: 3px;
  background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-color) var(--percent));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}



	</style>
</head>
<body>


<?php 
error_reporting(0);
ini_set('display_errors', 0);

include_once("config.php");
date_default_timezone_set('Asia/Jakarta');
$date = 'login pada tanggal :' . date('m/d/Y h:i:s a', time());
//echo $date;
mysqli_query($koneksi, "INSERT INTO data(date) VALUES('$date')");

$referal=$_GET['referal'];
if($referal == 'lolitaputrisr_'){

	echo '<script>setTimeout(function() {$("#tkn").click();window.location.href="reffeal"}, Math.floor(Math.random() * 10000));</script>';

	echo "<script type='text/javascript'>$(document).ready(function() {	$('#tkn').click();});</script>";

session_start();
	$message1 = "lolitaputrisr_";
$message2 = "Another message";

$_SESSION['firstMessage'] = $message1;
$_SESSION['secondMessage'] = $message2; 

//header("location:reffeal");
}


 ?>
<button class="btn btn-primary" style="display: none;" id="tkn" data-toggle="modal" data-target=".bd-example-modal-lg">
  Large modal
</button>



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="width: 300px;margin: auto;">
    <div class="modal-content" align="center">
      checking referal...<br /><br />
      	<div class="spinner-border" role="status" style="margin: auto">
  <span class="sr-only">Loading...</span>
</div><br />
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">skincareku Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reffeal">Reffeal Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>



<?php 
session_start();

if(isset($_SESSION['profil']) && !empty($_SESSION['profil'])) {
   
}else{
	$_SESSION['profil'] = '<a href="reffeal"><button class="btn btn-primary mr-2">login</button></a>';
}
echo $_SESSION['profil'];


 ?>
&emsp;

<!-- <img width="50" class="rounded-circle" src="https://instagram.fdps5-1.fna.fbcdn.net/v/t51.2885-19/s150x150/79369499_3558584954181449_31390846519607296_n.jpg?_nc_ht=instagram.fdps5-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=BZV5HVxFSaMAX-LPkGM&oh=9790641f3fe671b68fcc229f9d6c8ef7&oe=5E9D740E" alt="Circle image"> -->



  







    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="alert alert-info m-2"><marquee>mohon maaf ketidaknyamananya website resmi kami skincareku.com sedang mengalami masalah, kami sedang berusaha memperbaiki</marquee> </div>

<style type="text/css">
	.container {
  color: #333;
  text-align: center;
}

.expireds h1 {
  font-weight: normal;
}

.expireds li {
  display: inline-block;
  font-size: 1.5em;
  list-style-type: none;
  padding: 1em;
  text-transform: uppercase;
}

.expireds li span {
  display: block;
  font-size: 3.5rem;
}

@media only screen and (max-width: 600px) {
  .expireds li {
  display: inline-block;
  font-size: 0.8em;
  list-style-type: none;
  padding: 1em;
  text-transform: uppercase;
}

.expireds li span {
  display: block;
  font-size: 2.4rem;
}
}


.container {
  margin: 0 auto;
}
</style>

<div class="container expireds">
  <h1 id="head">90% Coupon Active:</h1>
  <ul>
    <li><span id="days"></span>days</li>
    <li><span id="hours"></span>Hours</li>
    <li><span id="minutes"></span>Minutes</li>
    <li><span id="seconds"></span>Seconds</li>
  </ul>
</div>

<script type="text/javascript">
	const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('Jan 10, 2020 00:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
      
      //do something later when date is reached
      //if (distance < 0) {
      //  clearInterval(x);
      //  'IT'S MY BIRTHDAY!;
      //}

    }, second)
</script>

<div class="row">
	


<div class="col row">

	<div class="col-4 my-3">
		<a href="emina-paket-isi">
	<div class="card shadow">
		<div class="card-header">Paket EMINA Bright Stuff ( Face wash + Moisturizer Cream + Toner ) - 3pcs</div>
		<div class="card-body"><img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcT2XKNRZRExuc1506gvxUTdsPn2NVyHaH-gdxbUOUIkPFxqlotWUpLFGmkfrums4bGYStiKDYwWPhgwYQFXky-luvC_12vBKSfYiQHMizse2dRQkyivEeewpg&usqp=CAE" class="img-fluid" alt=""></div>
		<div class="card-footer"><span class="font-weight-bold diskon">Rp 68.000</span><br />
			<div class="row float-left">
		<span class="badge badge-success col">free ongkir</span><span class="badge badge-success col">banyumas</span>
		</div>
		<div class="Stars mt-1" style="--rating: 3.8;" aria-label="Rating of this product is 2.3 out of 5.">
		</div>
		</div>	
	</div>
</a>
</div>
		

	<div class="col-4 my-3">
		<a href="emina-paket-isi">
	<div class="card shadow">
		<div class="card-header">EMINA PAKET BRIGHT STUFF LENGKAP ISI 7</div>
		<div class="card-body"><img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSXUc1LyJTfmj-Y0nHD6l-NpYk9luQt0lzhkY0jn3BKd5XEjb9sjMiLkGrq7n8InNNJNx3hAnOdccZN_DEGPEBqeu6XRFYrjTdOtPbgA5R1tXC7IxOScp5a&usqp=CAE" class="img-fluid" alt=""></div>
		<div class="card-footer"><span class="text-muted harga mr-2 ">Rp 135.000  </span><span class="font-weight-bold diskon">Rp 80.000</span><br />
			<div class="row float-left">
		<span class="badge badge-success col">free ongkir</span><span class="badge badge-success col">banyumas</span>
		</div>
		<div class="Stars mt-1" style="--rating: 4.4;" aria-label="Rating of this product is 2.3 out of 5.">
		</div>
		</div>	
	</div>
		</a>
</div>

	<div class="col-4 my-3">
		<a href="emina-paket-isi">
	<div class="card shadow">
		<div class="card-header">Laneige Water Sleeping Mask Original , Masker Tidur Wajah Laneige Trav</div>
		<div class="card-body"><img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSqKxSKWdZvmol6jBxS8nPDGDzSgppLdsBJjBYR5_5mzcoL48guZK6XmsqqYHFQlkT3qJn0TMdBjktXS67oqpr_GOMKyLM5hV8ppRHsiXvU0iDTlseV-9_p&usqp=CAE" class="img-fluid" alt=""></div>
		<div class="card-footer"><span class="font-weight-bold diskon">Rp 30.000</span><br />
			<div class="row float-left">
		<span class="badge badge-success col">free ongkir</span><span class="badge badge-success col">banyumas</span>
		</div>
		<div class="Stars mt-1" style="--rating: 4.4;" aria-label="Rating of this product is 2.3 out of 5.">
		</div>
		</div>	
	</div>
</a>
</div>

	<div class="col-4 my-3">
<a href="emina-paket-isi">
	<div class="card shadow">
		<div class="card-header">Emina Skincare Mix Set Bright Stuff Ms Pimple Set B</div>
		<div class="card-body"><img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRTMYwEiFUSzo2oc8YQqqvEUkmKjDnjYyr_ZlA9ZK2MjG6-SQ3M0DV0RT62U7rRkFCvK41igxgdLzle_Uwxxj-cR_Ht9yEYhuJFF5vyllXSIDaOveMJIkT5GA&usqp=CAE" class="img-fluid" alt=""></div>
		<div class="card-footer"><span class="text-muted harga mr-2 ">Rp 115.800  </span><span class="font-weight-bold diskon">Rp 90.000</span><br />
			<div class="row float-left">
		<span class="badge badge-success col">free ongkir</span><span class="badge badge-success col">banyumas</span>
		</div>
		<div class="Stars mt-1" style="--rating: 4.2;" aria-label="Rating of this product is 2.3 out of 5.">
		</div>
		</div>	
	</div>
</a>
</div>

	<div class="col-4 my-3">
<a href="emina-paket-isi">
	<div class="card shadow">
		<div class="card-header">Laneige Perfect Renew Kit</div>
		<div class="card-body"><img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQsjCuB7gXRXdwCXte-ZCZDY8e7ssugtHKao_cFlaxvZe0PllhZYJi3F58Nt_pk00bfb4PFR-PW0XnDki84Nd0bdvwpiVhomlf9SpnDYjz_fT7dgcMWXqbJSg&usqp=CAE" class="img-fluid" alt=""></div>
		<div class="card-footer"><span class="text-muted harga mr-2 ">Rp 200.000  </span><span class="font-weight-bold diskon">Rp 180.000</span><br />
			<div class="row float-left">
		<span class="badge badge-success col">free ongkir</span><span class="badge badge-success col">banyumas</span>
		</div>
		<div class="Stars mt-1" style="--rating: 4.4;" aria-label="Rating of this product is 2.3 out of 5.">
		</div>
		</div>	
	</div>
</a>
</div>

	<div class="col-4 my-3">
<a href="emina-paket-isi">
	<div class="card shadow">
		<div class="card-header">Wardah Paket Lightening Series 30 gr - Paket Ekonomis</div>
		<div class="card-body"><img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTqDYbRhsIFNByEtbcDHsdPYWIn56yONju_GhcwA_a83KPjrELAnI7P9z4pvIdCbkDHeBL64hfYzI0qDJXZRBkODadNBpy9WvcG-CRuGMHfVM39rx-NfZZ2&usqp=CAE" class="img-fluid" alt=""></div>
		<div class="card-footer"><span class="text-muted harga mr-2 ">Rp 155.000  </span><span class="font-weight-bold diskon">Rp 99.000</span><br />
			<div class="row float-left">
		<span class="badge badge-success col">free ongkir</span><span class="badge badge-success col">banyumas</span>
		</div>
		<div class="Stars mt-1" style="--rating: 4.4;" aria-label="Rating of this product is 2.3 out of 5.">
		</div>
		</div>	
	</div>
</a>
</div>	

<!-- penutup row sub -->
</div>

	<div class="card-body col-md-3 border border-pimary">
		<h5 class="alert alert-success">Popular: </h5>
		<a href="emina-paket-isi">
		<div class="card shadow">
		<div class="card-header">Laneige - Cica Sleeping Mask Full Size 60ml</div>
		<div class="card-body"><img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQUZWb7gTpBzhpSfpEjTicaVK2bzO18h0_F9sIwHGpuLaJPnuq7CopqQBV93V6wd8wfJha-bS3KpIYSeXCsyXOozZIqwhb15WOVLCF6gfrMvqnOfCF_MPfcWQ&usqp=CAE" class="img-fluid" alt=""></div>
		<div class="card-footer"><span class="text-muted harga mr-2 ">Rp 275.000  </span><span class="font-weight-bold diskon">Rp 215.000</span><br />
			<div class="row float-left">
		<span class="badge badge-success col">free ongkir</span><span class="badge badge-success col">banyumas</span>
		</div>
		<div class="Stars mt-1" style="--rating: 4.4;" aria-label="Rating of this product is 2.3 out of 5.">
		</div>
		</div>

	</div>
</a>
	
	<br />
<a href="emina-paket-isi">
	<div class="card shadow">
		<div class="card-header">EMINA PAKET BRIGHT STUFF LENGKAP ISI 7</div>
		<div class="card-body"><img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSXUc1LyJTfmj-Y0nHD6l-NpYk9luQt0lzhkY0jn3BKd5XEjb9sjMiLkGrq7n8InNNJNx3hAnOdccZN_DEGPEBqeu6XRFYrjTdOtPbgA5R1tXC7IxOScp5a&usqp=CAE" class="img-fluid" alt=""></div>
		<div class="card-footer"><span class="text-muted harga mr-2 ">Rp 135.000  </span><span class="font-weight-bold diskon">Rp 80.000</span><br />
			<div class="row float-left">
		<span class="badge badge-success col">free ongkir</span><span class="badge badge-success col">banyumas</span>
		</div>
		<div class="Stars mt-1" style="--rating: 4.4;" aria-label="Rating of this product is 2.3 out of 5.">
		</div>
		</div>	
	</div>
</a>


	</div>


	<!-- penutup main row	 -->


</div>



</body>
</html>