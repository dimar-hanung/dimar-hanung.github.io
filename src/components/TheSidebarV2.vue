<template>
  <div class="sidebar">
    <div class="sidebar__main">
      <div class="sidebar__logo">
        <font-awesome-icon :icon="['fab', 'vuejs']" />
      </div>
      <a href="#"><font-awesome-icon :icon="['fas', 'home']" />Beranda</a>
      <a class="--active" href="#"
        ><font-awesome-icon :icon="['fas', 'book']" />Akademik</a
      >
      <a href="#"
        ><font-awesome-icon :icon="['fas', 'file']" />Tugas dan Ujian</a
      >
      <a href="#"><font-awesome-icon :icon="['fas', 'user']" />Profile</a>
      <a href="#"><font-awesome-icon :icon="['fas', 'coins']" />Pembayaran</a>
    </div>
    <div class="sidebar__extend">
      <div class="px-4 py-2 text-2xl font-bold mt-5 mb-10">Akademik</div>

      <a href="#">Registrasi Mata Kuliah</a>
      <a href="#">Laporan Hasil Akademik</a>
      <a href="#">Pengiriman Bahan Ajar</a>
      <a href="#">...............</a>
      <a href="#">...............</a>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
$dark-blue: #002a76;
$links: #3389fe;
.sidebar {
  @apply flex text-white;
  background: $dark-blue;
  &__main {
    @apply text-center;
    border-right: solid #ccc 0.3px;
    width: 118px;
    a {
      @apply py-4 pl-3 pr-1 text-sm block;
      &:hover {
        @apply text-yellow-500;
      }
      &.--active {
        @apply text-yellow-500 relative;
        &::before {
          @apply bg-yellow-500;
          content: "";
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          left: 0;
          border-radius: 0 50% 50% 0;
          // box-shadow: 0 0 15px 0px rgb(236, 201, 75),0 0 25px 0px rgb(236, 201, 75);
          filter: drop-shadow(2px 3px 11px #ffd100);
          height: 43px;
          width: 22px;
        }
      }
    }
    svg {
      @apply mx-auto mb-2 block text-lg;
    }
  }
  &__extend {
    width: 236px;
    min-width: 236px;
    a {
      @apply block px-4 py-3;
      &:hover {
        background: $links;
      }
    }
  }
  &__logo {
    @apply py-4 mt-4;
    svg {
      @apply text-5xl;
    }
  }
}
</style>
