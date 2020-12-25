<template>
  <div
    :class="
      `sidebar sm:h-auto h-full absolute sm:relative w-full bg-gray-300 min-h-screen z-30 ${
        isSidebar ? '--active' : ''
      }`
    "
  >
    <div class="block mt-10 bg-gray-200">
      <router-link to="/"
        ><font-awesome-icon :icon="['fas', 'home']" /> Home</router-link
      >
      <router-link to="about"
        ><font-awesome-icon :icon="['fas', 'book']" /> About</router-link
      >
      <router-link to="a"
        ><font-awesome-icon :icon="['fas', 'medal']" /> Sertifikat</router-link
      >
      <router-link to="b"
        ><font-awesome-icon :icon="['fas', 'paint-brush']" /> Theme</router-link
      >
    </div>
  </div>
</template>

<script>
import { mapState } from "vuex";
export default {
  computed: {
    ...mapState(["isSidebar"])
  }
};
</script>

<style lang="scss">
@import "../assets/styles/variables";
$sidebar-width: 280px;
@mixin button-link {
  @apply block p-3;
  font-weight: bold;
  transition: all ease 0.3s;
  &:hover {
    @apply bg-gray-400 pl-5;
  }
  svg {
    @apply mr-1 text-center;
    width: 25px !important;
  }
  &.router-link-exact-active {
    @apply bg-gray-100;
  }
}

.sidebar {
  transition: all ease 0.3s;
  max-width: 100%;
  min-width: $sidebar-width;
  margin-left: -100%;
  &.--active {
    margin-left: 0px;
    left: 0px;
  }

  &__logo {
    @apply px-2;
  }
  &__title-top {
    @apply border-b border-white text-lg font-bold;
  }
  &__title-bot {
    @apply text-sm;
    position: relative;
    transition: all ease 0.3s;
    transition-delay: 1s;
  }

  a {
    @include button-link;
  }
}

@media screen and (min-width: $small) {
  .sidebar {
    max-width: $sidebar-width;
    margin-left: -$sidebar-width;
  }
}
</style>
