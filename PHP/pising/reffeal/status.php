<!DOCTYPE html>
<html>
<head>
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


<div class="card" style="max-width: 400px;margin: auto">
	<div class="card-body" >
		referal status: <br />	
		<div class="card-text">anda telah mengundang 7 dari 10 orang</div>
		<div class="progress"> <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div> </div><br />	
			<p>Selesaikan misi untuk mendapatkan coupon diskon 80% semua produk</p>
	</div>


</div>




</body>
</html>