<!DOCTYPE html>
<html>
<head>
	<title>skincare-ku</title>
	<script src="asset/jquery-3.4.1.min.js"></script>
	<script src="asset/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.min.css">
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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">skincare-ku Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Reffeal Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Me</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="alert alert-info m-2"><marquee>mohon maaf ketidaknyamananya website resmi kami skincareku.com sedang mengalami masalah, kami sedang berusaha memperbaiki</marquee> </div>
<div class="row">
	



<div class="col row">

	<div class="col-4 my-3">

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
</div>
		
	<div class="col-4 my-3">
	<div class="card">
		
		<div class="card-header">skin1</div>
		<div class="card-body"><img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQmjWd_RqM_RmGZDsElxnvDybbgWPFpZPLnh_oGE4Ky1xgf1_v4w86BsNNaO6TEa4tk9zl2JQ-ZYF8XZsr4vESEq1cH7Fih5lGqf2hx0dp5_lBBOf4MO77i&usqp=CAE" class="img-fluid" alt=""></div>
	</div>	
	</div>

	<div class="col-4 my-3">
	<div class="card">
		
		<div class="card-header">skin1</div>
		<div class="card-body"><img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRWpIwsuP-m8UndIFGejmdsypont1Szzo-OZnTGqJkvFuy9ZZ1zt99oZ7fmZWd25XF8pwI77SIxTbbS_zcRy7Wvr-DUpPTl-pMhB8jP_GH1&usqp=CAE" class="img-fluid" alt=""></div>
	</div>	
	</div>

	<div class="col-4 my-3">
	<div class="card">
		
		<div class="card-header">skin1</div>
		<div class="card-body"><img src="https://cf.shopee.co.id/file/7bbee3516f6ff7d10b1b902335ce9b50" class="img-fluid" alt=""></div>
	</div>	
	</div>


</div>
	<div class="col-md-3 sidebar float-left">
		sidebar
	</div>


</div>



</body>
</html>