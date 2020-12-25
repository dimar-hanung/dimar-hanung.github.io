<template>
  <div class="fade-in">
    <!-- <img alt="Vue logo" src="../assets/logo.png" /> -->
    <div class="flex md:flex-no-wrap flex-wrap py-4">
      <div class="w-full md:w-4/6 pr-0 md:pr-4">
        <div class="text-lg p-4 font-bold">Tentang Saya</div>
        <div class="p-4">
          Motivasi untuk terus belajar adalah karena teknologi terus berkembang,
          bahkan dengan terus belajar kita tidak bisa mengikuti semua
          perkembangan teknologi
        </div>

        <div class="p-4">
          <div class="timeline">
            <div class="timeline__wrap">
              <div class="timeline__year">2006 | Sentuh IT Pertama</div>
              <div class="timeline__desc">
                Menyentuh Dunia IT Sejak TK, dimasa itu game masih jarang, pada
                saat itu sangat suka menggambar di MS Excel 2003 di windows 2000
                - windows XP
              </div>
            </div>
            <div class="timeline__wrap">
              <div class="timeline__year">2012 - 2014 | Blog</div>
              <div class="timeline__desc">
                Saat kelas 4 membuat blog tentang cheat & password games, selama
                2 tahun membuat sekitar 120 artikel, namun kena phising sekitar
                kelas 6 atau awal smp saat ingin dipasang iklan,
                <a
                  class="font-bold text-blue-700"
                  href="https://www.facebook.com/photo?fbid=488344077993421&set=a.308596469301517/"
                  target="_blank"
                >
                  Lihat Fakta
                </a>
              </div>
            </div>
            <div class="timeline__wrap">
              <div class="timeline__year">2014 - 2017 | SMP</div>
              <div class="timeline__desc">
                Saat di SMPN 8 Purwokerto saya suka membuat video pendek,
                powerpoint pun cukup baik pada saat itu, tidak hanya itu nama
                saya cukup dikenal setelah sering membantu troubleshooting
                masalah laptop ( windows ) baik dari guru maupun teman.
              </div>
            </div>
            <div class="timeline__wrap">
              <div class="timeline__year">2017 - 2020 | SMK</div>
              <div class="timeline__desc">
                Saat di SMKS Telkom Purwokerto walaupun jurusan TKJ namun saya
                inisiatif untuk belajar pemrograman sendiri sejak kelas 10,
                dimulai dari c++ lanjut ke java
              </div>
            </div>
            <div class="timeline__wrap">
              <div class="timeline__year">2020 | Kerja</div>
              <div class="timeline__desc">
                <span class="text-blue-500">Juli - Oktober</span>, Diterima
                dalam program kerja sama refactory x Universitas terbuka,
                menjalani bootcamp selama 3 bulan dengan materi :
                <div>
                  <ol>
                    <li>Vue 2</li>
                    <li>Python</li>
                    <li>Microservice</li>
                    <li>Docker, Kubernetes</li>
                  </ol>
                </div>
              </div>
              <div class="timeline__desc">
                <span class="text-blue-500">Oktober - Sekarang</span>, Kerja
                kontrak di Universitas Terbuka Pusat posisi Staf Ahli
                Programmer, lebih tepat nya ke FrontEnd.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full md:w-2/6 personal">
        <tw-card>
          <template #header>Personal</template>
          <dl class="dl-flex">
            <dt>Nama</dt>
            <dd>Dimar Hanung</dd>

            <dt>Hobby</dt>
            <dd>Programming</dd>

            <dt>Contact</dt>
            <dd>087793110422</dd>

            <dt>Linkedin</dt>
            <dd class="font-bold text-blue-700">
              <a href="https://www.linkedin.com/in/dimar-hanung-09b393195/"
                >View Profile</a
              >
            </dd>
          </dl>
        </tw-card>
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.box {
  @apply p-2 w-1/3;
}

.personal {
  min-width: 12rem;
}

.timeline {
  @apply border-l-2 border-gray-500;
  &__wrap {
    @apply mt-5;
  }
  &__year {
    @apply bg-gray-500 px-2 rounded-tr shadow text-white;
    width: max-content;
  }
  &__desc {
    @apply bg-gray-200 p-2 mb-2 rounded-r shadow;
  }
}
</style>

<script>
// @ is an alias to /src
// import TwCards from "@/components/TwCards.vue";
export default {
  name: "About",
  components: {
    // TwCards
  }
};
</script>
