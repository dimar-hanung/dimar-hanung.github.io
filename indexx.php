<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/solid.min.css">
    <link rel="stylesheet" type="text/css" href="javascript/popupSimple/popupsimple.css">
    <script src="javascript/popupSimple/popupsimple.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    html,
    body {
        /*max-width: 100%;*/
        margin: 0px;
        overflow-y: overlay;
        overflow-x: hidden;
    }


    ::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

::-webkit-scrollbar
{
    width: 6px;
    background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
    background-color: #000000;
}


    /*foto-glitch*/


    .portrait__canvas {
        /*border-radius: 100%;*/
        width: 300px;
        /*height: 00px;*/
        filter: drop-shadow(0px 0px 5px black);
        /*background: white;*/
        margin: auto;
        fill: red;
        transition: all ease 1.5s;
        display: block;
        /*filter: invert(1);*/



    }

    .portrait {
        /*background: lightgreen;*/
        width: max-content;
        height: max-content;
        margin: auto;
        border-radius: 100%;
    }

    .portrait_canvas:hover {}

    @keyframes xcolor {

        0% {
            /*transform: rotate(0deg);*/
            background: lightgreen;
        }

        50% {loca
            /*transform: scale(0.7);*/
            background: pink;
        }

        100% {
            /*transform: r(0.8);*/
            background: steelblue;
        }

    }

    .dimar {
        width: 300px;
        display: block;
        margin: auto;
        border-radius: 100%;
        background: lightgreen;
    }

    .dimar:hover {
        /*animation: xcolor ease infinite alternate 1.5s;*/
        cursor: pointer;
        /*transform: rotate(360deg);*/
    }

    .triangle {
        fill: #17a2b8;
        stroke: black;
        stroke-width: 1;

        box-shadow: 10px 10px 10px black;
        transition: all 0.8s ease-in-out;
        /*animation: anim 0.8s linear infinite;*/
        transform-origin: 250px 250px;
        /*position: absolute;*/
    }

    .svg-shadow:hover {
        transition: all ease 0.5s;
        filter: drop-shadow(10px 10px 10px black);
    }

    .carousel-control-next,
    .carousel-control-prev {
        /*background: black;*/
        opacity: 0;
        left: -20px;
    }

    .carousel-control-next {
        left: auto;
        right: -20px;
    }

    .carousel-control-next:hover,
    .carousel-control-prev:hover {
        background: black;
        opacity: .8
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        height: 35px;
        width: 35px;
        outline: black;
        color: black;

        /*right: -70px;*/
        position: relative;
        background-color: black;
        filter: opacity(1);
        background-size: 100%, 100%;
        border-radius: 50%;
        border: 2px solid #1b847f;
        background-image: none;
    }

    .carousel-control-prev-icon {
        /*left: -70px;*/
    }

    .carousel-control-next-icon:after,
    .carousel-control-prev-icon:after {
        content: '>';
        font-size: 30px;
        color: #1b847f;
        bottom: 9px;
        position: relative;
        left: 1px;
    }

    .carousel-control-prev-icon:after {
        content: '<';
    }

    .carousel-indicators {
        margin-bottom: -20px;
        /*position: absolute;*/
    }

    .carousel-indicators li {
        background-color: #1b847f;
        width: 10px;
        height: 10px;
        border-radius: 100%;
    }

    #carouselExampleIndicators {
        position: relative;
        margin: 0px 40px;
    }


    @keyframes anim {

        100% {
            transform: rotate(-360deg);
        }

    }


    /*header biodata*/

    .bio-singkat {
        font-family: sans-serif;
        font-size: 22px;
        text-align: justify;

    }

    .bio-singkat>u {
        cursor: help;
    }


    /*end-header-biodata*/


    /*back-dimar*/

    .header-page {
        min-height: 100vh;
    }

    .header-page .col .card {
        background: transparent;
        color: white;
    }

    .back-dimar {
        min-height : 100vh;
        width: 100vw;
        position: absolute;
        top: 0px;
        z-index: -2;

        font-size: 28px;
        overflow: hidden;
        background: black;
        /*filter: brightness(0.3);*/
    }

/*
    @media only screen and (min-width: 900px) {

        .back-dimar {
            height: 100vh
        }

        .header-page {
            height: 100vh;
        }


    }
*/

    #newCanvas {
        filter: blur(2px) brightness(0.3);
        transform: rotate(20deg) scale(3) translateY(50px);
    }


    .scroll-bawah {}


    /*end-back-dimar*/



    #myCanvas {
        display: none;
    }

    a {
        color: inherit;
    }





    /*tombol-bawah*/

    .down-button {
        position: relative;
        display: block;
        margin: auto;
        line-height: 100px;
        /*cursor: pointer;*/


    }

    .down-button>.down-button-icon {
        color: white;
        text-align: center;
        margin: auto;
        display: block;
        position: relative;
        width: min-content;
        font-size: 24px;
        z-index: 3;
        transform: translateY(0px);
        width: 55px;
        height: 55px;
        line-height: 55px;
        border-radius: 100%;
        animation: bawah 0.8s ease-in-out alternate infinite;

    }

    .down-button>.down-button-icon:hover {
        background: #ffffff30;
    }


    @keyframes bawah {

        from {
            transform: translateY(0px);
        }

        to {
            transform: translateY(20px);
        }

    }



    /*bintang*/


    .batas1 {
        pointer-events: none;
        position: absolute;
        width: 100vw;
        display: block;
        height: 600px;
        background-image: linear-gradient(0.2deg, rgba(255, 253, 20, 0) 4.5%, rgb(0, 0, 0) 36.6%, rgb(0, 0, 0) 59.7%, rgba(49, 86, 214, 0) 87.3%);
        z-index: 2;
        /*filter: blur(20px);*/
        transform: translateY(-300px)
    }

    .bintang {
        min-height: 768px;
    }


    .stars,
    .twinkling {
        position: absolute;
        /*top: 0;*/
        left: 0;
        right: 0;
        /*bottom: 0;*/
        width: 100vw;
        height: 100%;
        display: block
    }

    .stars {
        background: #000 url(http://www.script-tutorials.com/demos/360/images/stars.png) repeat top center;
        z-index: 0
    }

    .twinkling {
        background: transparent url(http://www.script-tutorials.com/demos/360/images/twinkling.png) repeat top center;
        z-index: 1;
        -moz-animation: move-twink-back 200s linear infinite;
        -ms-animation: move-twink-back 200s linear infinite;
        -o-animation: move-twink-back 200s linear infinite;
        -webkit-animation: move-twink-back 200s linear infinite;
        animation: move-twink-back 200s linear infinite
    }

    @keyframes move-twink-back {
        from {
            background-position: 0 0
        }

        to {
            background-position: -10000px 5000px
        }
    }


    .main-commitmen {
        position: relative;
        text-align: center;
        top: 80px;
        z-index: 99;
    }

    /*bintang-end*/




    /*summary*/

    details > summary::-webkit-details-marker {
  /*display: none;*/
  color: #17a2b8;
}

    details summary{
        outline: none;
    }
    
    /*details summary:before{
        content: ">";
    }
*/
    details[open] > .deskripsi{
        border: solid 0.1px #17a2b8 !important;
        border-top: none !important;
    }

    details[open] > summary {
        border: solid 0.1px #17a2b8 !important;
        border-bottom: none !important;
    }


    /*end-summary*/







    </style>
</head>

<body>
    <nav class="navbar ml-3 navbar-expand-lg">
        <span class="navbar-brand text-white" href="#">Dimar Hanung Prakoso |</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-info font-weight-bold">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Facebook</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/dmr_hanung/">Instagram</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">WhatsApp</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="back-dimar" id="backDimar">
        <canvas id="myCanvas"></canvas>
        <canvas id="newCanvas" width="1366" height="500"></canvas></div>
    <section class="container border-dark mt-3 header-page">
        <div class="row">
            <div class="col order-2 order-md-1">
                <div class="card border-0">
                    <div class="card-body bio-singkat">
                        <h4>Tentang Saya</h4>
                        <hr />
                        Nama saya <span class="popup-content text-dark">Panggil Saja Hanung :D</span> <u>Dimar Hanung Prakoso</u>, lahir di Banyumas, 14 Desember 2001, saya memang sedikit susah bergaul dengan orang, namun bukan berati saya tidak bisa bekerja sama dalam team, tidak jarang saya meng-handle tugas kelompok khususnya project akademik , dari kelompok 3 orang hingga project 1 kelas
                    </div>
                </div>
            </div>
            <div class="col order-1 order-md-2">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="biodata m-auto">
                            <img class="dimar" src="assets/dimar.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="down-button">
            <a href="#komitmen" onclick="smoothScroll('#komitmen')" class="fas fa-chevron-down down-button-icon"></a>
            <br/>
        </div>

    </section>
    <div>
    </div>
    <div class="batas1"></div>
    <section class="bintang" id="komitmen">
        <div class="stars">
            <!-- <center>
            <h1>cybercatzone inside</h1>
        </center> -->
        </div>
        <div class="twinkling"></div>
        <main class="main-commitmen">
            <h1 class="text-white">My Comitment</h1>
        </main>
    </section>
    <section class="container border-dark mt-5">
        <header>
            <div class="row border-bottom border-dark p-2">
                <div class="col">
                    <h4>Daftar isi hasil pekerjaan</h4>
                </div>
                <div class="col" style="max-width: 300px">
                    <input class="form-control" type="text" oninput="cari(this.value)" placeholder="Search">
                </div>
            </div>
        </header>
        <div class="row">
            <div class="col" style="min-width: 250px">
                <div class="card mt-5 shadow">
                    <div class="row subjudul m-0">
                        <h6 class="col card-header m-0 bg-dark text-white p-2">Pure Javascript</h6>
                    </div>
                    <div class="card-body">
                        <div id="miniLibrary">
                            <h6>Mini Library :</h6>
                            
                            <details class="list-judul">
                                <summary class="p-2 border mt-2">rotate</summary>
                                <div class="border deskripsi p-2">
                                    jadi rotate js adalah
                                </div>
                            </details>
                              
                             
                             <a href="javascript/randomColorJs/demo.html">
                                <div class="p-2 border list-judul mt-2">randomColorJs</div>
                            </a>
                            <a href="javascript/showHideJs/demo.html">
                                <div class="p-2 border list-judul mt-2">showHideJs</div>
                            </a>
                            <a href="javascript/popupSimple/demo.html">
                                <div class="p-2 border list-judul mt-2">popupSimpleJs</div>
                            </a>
                            <a href="javascript/textExperiment/binaryRun.html">
                                <div class="p-2 border list-judul mt-2">binaryTextRunJs</div>
                            </a>
                        </div>
                        <div id="simpleProject" class="mt-4">
                            <h6>Simple Tool :</h6>
                            <a href="javascript/scrapperHTML/scrapper.html">
                                <div class="p-2 border list-judul mt-2">scrapperHTML</div>
                            </a>
                            <a href="javascript/calculator/permutasi.html">
                                <div class="p-2 border list-judul mt-2">Calculator Susunan Huruf</div>
                            </a>
                            <a href="javascript/calculator/faktorial.html">
                                <div class="p-2 border list-judul mt-2">Calculator Factorial</div>
                            </a>
                        </div>
                        <div id="just4fun" class="mt-4">
                            <h6>Just4fun:</h6>
                            <a href="javascript/portofolio.html">
                                <div class="p-2 border list-judul mt-2">webProfile</div>
                            </a>
                            <a href="javascript/popup/popup.html">
                                <div class="p-2 border list-judul mt-2">Buka 100 Popup / 1000 tab</div>
                            </a>
                            <a href="javascript/musicVisualizer/music2.html">
                                <div class="p-2 border list-judul mt-2">Music Visualizer</div>
                            </a>
                            <a href="javascript/canvasAnimation.html">
                                <div class="p-2 border list-judul mt-2">Canvas Animation Text</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="min-width: 250px">
                <div class="card mt-5 shadow">
                    <div class="row subjudul m-0">
                        <h6 class="col card-header m-0 bg-dark text-white p-2">Tutorial dan dokumentasi</h6>
                    </div>
                    <div class="card-body">
                        <h6>Dokumentasi:</h6>
                        <a href="pelajaran/pakYogi/docker.html">
                            <div class="p-2 border list-judul mt-2">Docker</div>
                        </a>
                        <a href="pelajaran/pakYogi/installasiAws.html">
                            <div class="p-2 border list-judul mt-2">Installasi AWS EC2</div>
                        </a>
                        <a href="pelajaran/pakVe/soal1.html">
                            <div class="p-2 border list-judul mt-2">Latihan Menjawab Soal</div>
                        </a>
                        <a href="pelajaran/pakkris/soal.html">
                            <div class="p-2 border list-judul mt-2">Latihan Pembahasan Soal</div>
                        </a>
                        <a href="pelajaran/pakStar/osiLayer.html">
                            <div class="p-2 border list-judul mt-2">Pembahasan Osi Layer</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <div class="row"> 



    <?php 
    
    $no = 1;
    $data = mysqli_query($koneksi,"select * from data_list");
    
    while($d = mysqli_fetch_array($data)){
      
      ?>
      <!-- <script type="text/javascript">alert('tes:'+"<?php echo $d['nama'];?>")</script> -->

      <div class="col" style="min-width: 250px">
                <div class="card mt-5 shadow">
                    <div class="row subjudul m-0">
                        <h6 class="col card-header m-0 bg-dark text-white p-2"><?php echo $d['kategori']; ?></h6>
                    </div>
                    <div class="card-body">
                        <h6>Dokumentasi:</h6>
                        <a href="pelajaran/pakYogi/docker.html">
                            <div class="p-2 border list-judul mt-2">Docker</div>
                        </a>
                        <a href="pelajaran/pakYogi/installasiAws.html">
                            <div class="p-2 border list-judul mt-2">Installasi AWS EC2</div>
                        </a>
                        <a href="pelajaran/pakVe/soal1.html">
                            <div class="p-2 border list-judul mt-2">Latihan Menjawab Soal</div>
                        </a>
                        <a href="pelajaran/pakkris/soal.html">
                            <div class="p-2 border list-judul mt-2">Latihan Pembahasan Soal</div>
                        </a>
                        <a href="pelajaran/pakStar/osiLayer.html">
                            <div class="p-2 border list-judul mt-2">Pembahasan Osi Layer</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['kategori']; ?></td>
        <td><?php echo $d['sub_kategori']; ?></td>
        <td><?php echo $d['judul']; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
          <a href="delete.php?id=<?php echo $d['id']; ?>">HAPUS</a>
        </td>
      </tr>
      <?php 
    }
    ?>
  </table>

  
  <?php
  $sql = mysqli_query($koneksi,"SELECT * FROM kategori INNER JOIN sub_kategori ON kategori.kategori_id = sub_kategori.kategori_id INNER JOIN data_list ON sub_kategori.sub_id = data_list.sub_kategori ORDER BY sub_kategori.kategori_id");


  $jejak="x";
  $z=0;



  while ($row = $sql->fetch_array()) {
print_r($row);
//echo "jejak: ".$jejak."<br>";
    echo '<div class="border border-danger p-2">';

    if ($jejak != $row['kategori_nama']) {
      print_r($row);
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


  <?php
  // $sql = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY kategori_nama ASC");

  //   echo '<ul>';
  //   while($row = mysqli_fetch_assoc($sql)){
  //     $kat_id = $row['kategori_id'];
  //     $sql2 = mysqli_query($koneksi,"SELECT * FROM sub_kategori WHERE kategori_id='$kat_id'");
 
  //     echo '<li>'.$row['kategori_nama'];
  //       echo '<ul>';
  //         while($row2 = mysqli_fetch_assoc($sql2)){

  //     $kat_id2 = $row2['sub_id'];
  //     $sql3 = mysqli_query($koneksi,"SELECT * FROM data_list WHERE sub_kategori='$kat_id2'");

  //           echo '<li>'.$row2['sub_nama'];
            
  //           echo '<ul>';
  //           while($row3 = mysqli_fetch_assoc($sql3)){

  //              echo '<li>'.$row3['deskripsi'];
  //           }

  //           echo '</ul>';

  //           echo '</li>';


  //         }
  //       echo '</ul>';
  //     echo '</li>';
  //   }
  //   echo '</ul>';
  
  ?>

    </div>

    </section>
    <footer class="modal-footer bg-dark text-white mt-5">
        <p>Footer - Copyright DimarHanung 2020</p>
    </footer>
    <script type="text/javascript">
    // setInterval(function() {

    //     $('.triangle').attr('points','150 100,100 '+Math.floor(Math.random() * 300)+', '+Math.floor(Math.random() * 300)+' 200,150 100');

    // }, 100);



    // scroll

    function smoothScroll(ID) {
        $('body,html').animate({
            scrollTop: $(ID).offset().top
        }, 1000);
        return false;
    }

    // end-scroll


    // binarydimar


    $(document).ready(function() {
        startBin();
    });


    let dx = 0;
    let dy = 0;

    function startBin(){

     dx = 0;
     dy = 0;

        bin() 
       window.requestAnimationFrame(drawLagi);
    }


    function bin() {
        let canvas = document.getElementById('myCanvas');
        let binctx = canvas.getContext('2d');

        binctx.moveTo(300, 300)
        let text = 'ABCDEF1234567890'.split('');
        // binctx.canvas.height = window.innerHeight - 20;



        binctx.canvas.height = document.getElementsByClassName('header-page')[0].offsetHeight + 100;

        binctx.canvas.width = window.innerWidth - 20;
        binctx.font = '16pt Calibri black';
        binctx.clearRect(0, 0, canvas.width, canvas.height);
        let x = 20;
        let y = 20;

        while (y < window.innerHeight - 100) {
            // b=20;
            // if (b>window.innerHeight-100 && a > window.innerWidth - 50) {return}

            binctx.fillStyle = "hsla(" + Math.floor(Math.random() * 360) + ",100%,50%,1)";
            binctx.fillText(text[Math.floor(Math.random() * text.length)], x, y);



            if (x > window.innerWidth - 50) {
                y = y + 30;
                x = 0
            }
            x = x + 20;
            //console.log(x, y)
        }



    }


    


   

    //setInterval(drawLagi,50)



    function drawLagi() {

        let canvas = document.getElementById('myCanvas');
        //let binctx = canvas.getContext('2d');

        let canvasDraw = document.getElementById('newCanvas');
        let binDrw = canvasDraw.getContext('2d');



        //console.log(document.getElementsByClassName('header-page')[0].offsetHeight);
        binDrw.canvas.height = document.getElementsByClassName('header-page')[0].offsetHeight + 100;


        binDrw.canvas.width = window.innerWidth - 20;

        dx = dx - 0.5;

        binDrw.drawImage(canvas, dx, 0);
        binDrw.drawImage(canvas, dx + window.innerWidth - 50, 0);

        if (Math.abs(dx) > window.innerWidth - 50) { dx = 0 }

            window.addEventListener("resize", function() {
        return false
    }, !1)

        window.requestAnimationFrame(drawLagi);

    }


    window.addEventListener("resize", function() {
        setTimeout(function() {
            startBin()
        }, 100)
    }, !1)



    // end binary dimar



    function cari(value) {



        let cardx = document.getElementsByClassName('list-judul');
        for (var i = 0; i < cardx.length; i++) {
            //console.log('masuk')
            let card = document.getElementsByClassName('list-judul')[i];
            // console.log(cardx[i].innerHTML)
            if (cardx[i].innerHTML.toLowerCase().indexOf(value.toLowerCase()) == -1) {
                $(card).css('display', 'none');
            } else {
                $(card).css('display', 'block');

            }


        }


    }




    // batas





    // batas glitch
    </script>
</body>

</html>