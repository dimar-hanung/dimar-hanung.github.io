let dataPekerjaan = [
  {
    theme:"Middle - Big Project",
    listObj : [
      {
        title:"WebPack",
        list:[{
          name: "covid19-statistic",
          demo: "covid19-statistic",
          
          desc:
            "Menggunakan WebPack dan API dan chartJS untuk Menampilkan Statisktik Kasus Covid19 realtime",
        }]
      }
    ]
  },
  {
    theme:"MS Office Presentation & Report",
    listObj : [
      {
        title:"Best Powerpoint",
        list:[{
          name: "Project-Mikrotik-Hotspot",
          demo: "https://drive.google.com/file/d/1TCNkyGeWalKRaHn3cQLOoaeDMZGNsn1C/view?usp=sharing",
          
          desc:
            "Membutuhkan Powerpoint 2016+ , atau tampilan menjadi hancur",
        }]
      }
    ]
  },
  {
    theme: "Javascript",
    listObj: [
      {
        title: "Mini Library",
        list: [
          {
            name: "rotateJs",
            demo: "javascript/rotateJs/remake/demo.html",
            github: "https://github.com/dimar-hanung/rotateJs",
            desc:
              "Merotasi element dalam jumlah kelompok, baik menggunakan animasi maupun tidak",
          },
          {
            name: "randomColorJs",
            demo: "javascript/randomColorJs/demo.html",
            github: "https://github.com/dimar-hanung/randomColorJs",
            desc: "Membuat warna element random secara berkelompok",
          },
          {
            name: "popupSimpleJs",
            demo: "javascript/randomColorJs/demo.html",
            desc: "Menampilkan Tooltip saat hover pada element",
          },
          {
            name: "binaryTextRunJs",
            demo: "javascript/textExperiment/binaryRun.html",
            desc: "Transisi static animasi text binary",
          },
        ],
      },
      {
        title: "Simple Tool",
        list: [
          {
            name: "scrapperHTML",
            demo: "javascript/scrapperHTML/scrapper.html",
            desc: "mengambil bagian bagian dari sebuah website",
          },
          {
            name: "Kalkulator Susunan Huruf",
            demo: "javascript/calculator/permutasi.html",
            desc: "Calculator Menyusun Huruf",
          },
          {
            name: "Kalkulator Faktorial",
            demo: "javascript/calculator/faktorial.html",
            desc: "Menghitung hasil dari faktorial",
          },
          {
            name: "Kuis Penjumlahan",
            demo: "javascript/calculator/kuisPenjumlahan.html",
            desc: "Mengasah kecepatan berhitung penjumlahan kita",
          },
          {
            name: "Kuis Perkalian",
            demo: "javascript/calculator/kuisPerkalian.html",
            desc: "Mengasah kemampuan perkalian kita",
          },
        ],
      },
      {
        title: "just4fun",
        list: [
          {
            name: "webProfile",
            demo: "javascript/portofolio.html",
            desc: "ketika sedang bosan aja",
          },
          {
            name: "Buka 100-1000 tab/popup",
            demo: "javascript/popup/popup.html",
            desc: "hati hati ya kalo mau klik ntar crash :)",
          },
          {
            name: "musicVisualizer2",
            demo: "javascript/musicVisualizer/music2.html",
            desc: "happy aja mainan dengan musik",
          },
          {
            name: "canvasAnimation",
            demo: "javascript/canvasAnimation.html",
            desc: "Mengisi Waktu Luang",
          },
          {
            name: "profileGlitch",
            demo: "javascript/svgGlitch.html",
            desc: "hanya sebuah efek glitch",
          },
        ],
      },
    ],
  },
  {
    theme: "Dokumentasi",
    listObj: [
      {
        title: "TKJ",
        list: [
          {
            name: "Docker",
            desc: "Dokumentasi Perintah dasar Docker",
            demo: "pelajaran/pakYogi/docker.html",
          },
          {
            name: "Installasi AWS EC2",
            demo: "pelajaran/pakYogi/installasiAws.html",
            desc: "Langkah-langkah Installasi AWS EC2",
          },
          {
            name: "Latihan Menjawab Soal Jaringan",
            demo: "pelajaran/pakVe/soal1.html",
            desc: "Latihan Menjawab Soal jaringan",
          },
          {
            name: "Latihan Pembahasan Soal",
            demo: "pelajaran/pakkris/soal.html",
            desc: "Pembahasan Soal jaringan",
          },
          {
            name: "EmbedInject",
            demo: "dokumentasi/embedInject.html",
            desc: "Percobaan Injeksi Js ke embedded browser",
          },
          {
            name: "Pembahasan Osi Layer",
            demo: "Pembahasan Osi Layer",
            desc: "pelajaran/pakStar/osiLayer.html",
          },
        ],
      },
      {
        title: "Wapi.js",
        list: [
          {
            name: "Broadcast Whatsapp",
            demo: "pelajaran/umum/boradcastWhatsapp.html",
            desc:
              "cara broadcast wa menggunakan WAPI.js <span style='color:#dc3435'>Potensi Banned</span>",
          },
          {
            name: "typing whatsapp",
            demo: "pelajaran/umum/typingWhatsapp.html",
            desc: "Supaya status whatsapp kita selalu 'sedang mengetik'",
          },
        ],
      },
      {
        title: "WEB Development",
        list: [
          {
            name: "PWA Dasar",
            demo: "pelajaran/PWA/pwa.html",
            desc: "Penjelasan Basic PWA",
          },
        ],
      },
    ],
  },
];

// console.log(dataPekerjaan[0].listObj[0].title);

for (a in dataPekerjaan) {
  console.log(dataPekerjaan[a].theme);
  let col = document.createElement("div");
  col.setAttribute("class", "porto-box card mt-5 shadow");
  col.innerHTML += `<h6 class="porto-main-title">${dataPekerjaan[a].theme}</h6>`;
  for (b in dataPekerjaan[a].listObj) {
    console.log("  " + dataPekerjaan[a].listObj[b].title);
    //col.innerHTML += `<h6 class="porto-main-title">${dataPekerjaan[a].listObj[b].title}</h6>`;
    let mainTitle = document.createElement("div");
    mainTitle.setAttribute("class", "porto-main-box");
    mainTitle.innerHTML += `<h6 class="porto-sub-title">${dataPekerjaan[a].listObj[b].title}</h6>`;

    for (c in dataPekerjaan[a].listObj[b].list) {
      console.log("    " + dataPekerjaan[a].listObj[b].list[c].name);
      let github = "";
      let demo = "";
      if (dataPekerjaan[a].listObj[b].list[c].github !== undefined) {
        github = `<div><a class="porto-btn dark" target="_blank" href="${dataPekerjaan[a].listObj[b].list[c].github}"><div class="fab fa-github"></div></a></div>`;
      }
      if (dataPekerjaan[a].listObj[b].list[c].demo !== undefined) {
        demo = /*html*/ `<div><a class="porto-btn" target="_blank" href="${dataPekerjaan[a].listObj[b].list[c].demo}">Lihat</a></div>`;
      }

      mainTitle.innerHTML += /*html*/ `
      <details class="list-judul">
        <summary class="porto-list-title">
        <div class="porto-hover"></div>
        ${dataPekerjaan[a].listObj[b].list[c].name}
        </summary>\
     <div class="porto-list-desc">
       ${dataPekerjaan[a].listObj[b].list[c].desc}<hr/>
    <div style="display:inline-flex"> ${demo + github}</div>
    </div>
         </details>

      `;
      col.appendChild(mainTitle);
      document.getElementById("cdataPekerjaan").appendChild(col);
    }
  }
}
