 let dataPekerjaan = [

     {
         kategori   : "Pure Javascript",
         subKategori: "Mini library",
         judul      : "rotateJs",
         deskripsi  : "Merotasi element dalam jumlah kelompok, baik menggunakan animasi maupun tidak",
         demo       : "javascript/rotateJs/remake/demo.html",
         github     : "https://github.com/dimar-hanung/rotateJs",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Mini library",
         judul      : "randomColorJs",
         deskripsi  : "Membuat warna element random secara berkelompok",
         demo       : "javascript/randomColorJs/demo.html",
         github     : "https://github.com/dimar-hanung/randomColorJs",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Mini library",
         judul      : "showHideJs",
         deskripsi  : "buka tutup",
         demo       : "javascript/randomColorJs/demo.html",
         github     : "github.com",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Mini library",
         judul      : "popupSimpleJs",
         deskripsi  : "mengambil bagian bagian dari sebuah website",
         demo       : "javascript/randomColorJs/demo.html",
         github     : "github.com",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Mini library",
         judul      : "binaryTextRunJs",
         deskripsi  : "transisi static animasi text binary",
         demo       : "javascript/textExperiment/binaryRun.html.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Simple Tool",
         judul      : "scrapperHTML",
         deskripsi  : "mengambil bagian bagian dari sebuah website",
         demo       : "javascript/scrapperHTML/scrapper.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Simple Tool",
         judul      : "Calculator Susunan Huruf",
         deskripsi  : "Calculator Mat Menyusun Huruf",
         demo       : "javascript/calculator/permutasi.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Simple Tool",
         judul      : "Calculator Factorial",
         deskripsi  : "Menghitung hasil dari faktorial",
         demo       : "javascript/calculator/faktorial.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Just4fun",
         judul      : "webProfile",
         deskripsi  : "ketika sedang bosan aja",
         demo       : "javascript/portofolio.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Just4fun",
         judul      : "Buka 100-1000 tab/popup",
         deskripsi  : "hati hati ya kalo mau klik ntar crash :)",
         demo       : "javascript/popup/popup.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Just4fun",
         judul      : "musicVisualizer2",
         deskripsi  : "happy aja mainan dengan musik",
         demo       : "javascript/musicVisualizer/music2.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Just4fun",
         judul      : "canvasAnimation",
         deskripsi  : "Menghitung hasil dari faktorial",
         demo       : "javascript/canvasAnimation.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Tutorial dan dokumentasi",
         subKategori: "Dokumentasi",
         judul      : "Docker",
         deskripsi  : "Dokumentasi Perintah dasar Docker",
         demo       : "pelajaran/pakYogi/docker.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Tutorial dan dokumentasi",
         subKategori: "Dokumentasi",
         judul      : "Installasi AWS EC2",
         deskripsi  : "Dokumentasi Installasi AWS",
         demo       : "pelajaran/pakYogi/installasiAws.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Tutorial dan dokumentasi",
         subKategori: "Dokumentasi",
         judul      : "Latihan Menjawab Soal 1",
         deskripsi  : "Latihan Menjawab Soal",
         demo       : "pelajaran/pakVe/soal1.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Tutorial dan dokumentasi",
         subKategori: "Dokumentasi",
         judul      : "Latihan Pembahasan Soal",
         deskripsi  : "Dokumentasi Perintah dasar Docker",
         demo       : "pelajaran/pakkris/soal.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Tutorial dan dokumentasi",
         subKategori: "Dokumentasi",
         judul      : "Pembahasan Osi Layer",
         deskripsi  : "Pembahasan Osi Layer",
         demo       : "pelajaran/pakStar/osiLayer.html",
         github     : "",
         codepen    : "",
         tambahan   : ""
     }


 ]

  // function liveDemo(link){


  //       $('body').append('<iframe style="position:fixed;top:10px;margin:auto;" src="'+link+'" frameborder="0"></iframe>');


  //    }


 $(document).ready(function() {

     let jejak = '';
     let jejak2 = '';

     for (let dataCount = 0; dataCount < dataPekerjaan.length; dataCount++) {


         if (jejak != dataPekerjaan[dataCount].kategori) {

             let col = document.createElement("div");
             col.setAttribute("class", "col mx-auto col-lg-6");
             col.setAttribute("style", "min-width:250px;");

             let append = document.createElement("div");

             append.setAttribute("class", "card mt-5 shadow");

             let appendBody = document.createElement('div');
             appendBody.setAttribute("class", "card-body pt-0")
             appendBody.id = 'ctn' + dataPekerjaan[dataCount].kategori.split(' ').join('');
             let appendH6 = document.createElement("h6");
             appendH6.setAttribute("class", "card-header m-0 bg-dark text-white p-2");
             appendH6.appendChild(document.createTextNode(dataPekerjaan[dataCount].kategori))
             append.appendChild(appendH6);
             append.appendChild(appendBody);
             //append.appendChild(document.createTextNode('ex'));

             col.appendChild(append);
             document.getElementById('cdataPekerjaan').appendChild(col);

         }

         // let appendJudul = document.createElement("div");
         // appendJudul.setAttribute("class", "row subjudul m-0");

         if (jejak2 != dataPekerjaan[dataCount].subKategori || jejak != dataPekerjaan[dataCount].kategori) {
             let sub = document.createElement('h6');
             sub.setAttribute('class', 'mt-3');
             sub.appendChild(document.createTextNode(dataPekerjaan[dataCount].subKategori));

             document.getElementById('ctn' + dataPekerjaan[dataCount].kategori.split(' ').join('')).appendChild(sub);

             jejak = dataPekerjaan[dataCount].kategori;
             jejak2 = dataPekerjaan[dataCount].subKategori;
         }

         let demo ='';
         let github='';
         if (dataPekerjaan[dataCount].demo!='') demo= '<div><a class="btn btn-primary" target="_blank" href="'+dataPekerjaan[dataCount].demo+'">Lihat</a></div>';
         if (dataPekerjaan[dataCount].github!='') github='<div><a class="btn btn-dark mx-2" target="_blank" href="'+dataPekerjaan[dataCount].github+'"><div class="fab fa-github"></div></a></div>';
         let detail = '<details class="list-judul">\
                                <summary class="p-2 border mt-2">' + dataPekerjaan[dataCount].judul + '</summary>\
                                <div class="border deskripsi p-2">\
                                    ' + dataPekerjaan[dataCount].deskripsi + '<hr/>\
                                    <div style="display:inline-flex">\
                                    '+demo+github+'\
                                </div></div>\
                            </details>';

         $('#' + 'ctn' + dataPekerjaan[dataCount].kategori.split(' ').join('')).append(detail);

         // appendJudul.appendChild(appendH6);
         // document.getElementById('ctn'+dataPekerjaan[dataCount].kategori.split(' ').join('')).appendChild(appendJudul);


     }



   


 });