 let dataPekerjaan = [

     {
         kategori   : "Pure Javascript",
         subKategori: "Mini library",
         judul      : "rotateJs",
         deskripsi  : "rotateJs adalah mini library yang memudahkan kita untuk merotasi element secara individu maupun massal",
         demo       : "javascript/rotateJs/remake/demo.html",
         github     : "github.com",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Mini library",
         judul      : "randomColorJs",
         deskripsi  : "randomColorJs adalah mini library memudahkan mengacak warna element secara massal",
         demo       : "javascript/randomColorJs/demo.html",
         github     : "github.com",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Simple Tool",
         judul      : "scrapperHTML",
         deskripsi  : "mengambil bagian bagian dari sebuah website",
         demo       : "javascript/randomColorJs/demo.html",
         github     : "github.com",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Tutorial dan dokumentasi",
         subKategori: "Dokumentasi",
         judul      : "Docker",
         deskripsi  : "mengambil bagian bagian dari sebuah website",
         demo       : "javascript/randomColorJs/demo.html",
         github     : "github.com",
         codepen    : "",
         tambahan   : ""
     },
     {
         kategori   : "Pure Javascript",
         subKategori: "Simple Tool",
         judul      : "scrapperHTML",
         deskripsi  : "mengambil bagian bagian dari sebuah website",
         demo       : "javascript/randomColorJs/demo.html",
         github     : "github.com",
         codepen    : "",
         tambahan   : ""
     }


 ]



 $(document).ready(function() {

     let jejak = '';
     let jejak2 = '';

     for (let dataCount = 0; dataCount < dataPekerjaan.length; dataCount++) {


         if (jejak != dataPekerjaan[dataCount].kategori) {

             let col = document.createElement("div");
             col.setAttribute("class", "col col-md-5");
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

         let detail = `<details class="list-judul">
                                <summary class="p-2 border mt-2">` + dataPekerjaan[dataCount].judul + `</summary>
                                <div class="border deskripsi p-2">
                                    ` + dataPekerjaan[dataCount].deskripsi + `<hr/>
                                    <div><a class="btn btn-primary" href="` + dataPekerjaan[dataCount].demo + `">Demo</a></div>
                                </div>
                            </details>`;

         $('#' + 'ctn' + dataPekerjaan[dataCount].kategori.split(' ').join('')).append(detail);

         // appendJudul.appendChild(appendH6);
         // document.getElementById('ctn'+dataPekerjaan[dataCount].kategori.split(' ').join('')).appendChild(appendJudul);


     }
 });