<template>
  <div
    :class="
      `sidebar sm:h-auto h-full w-full sm:w-auto absolute sm:relative ${
        isSidebar ? '--active' : ''
      }`
    "
  >
    <div class="sidebar__header flex">
      <div class="sidebar__logo">
        <font-awesome-icon class="h-full text-5xl" :icon="['fab', 'vuejs']" />
      </div>
      <div class="sidebar__title">
        <div class="sidebar__title-top">Dimar Hanung Prakoso</div>
        <div class="sidebar__title-bot">Front-End Dev</div>
      </div>
    </div>

    <div class="block mt-10 bg-gray-700">
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
  @apply block p-3 text-white;
  font-weight: bold;
  transition: all ease 0.3s;
  &:hover {
    @apply bg-gray-500 pl-5;
  }
  svg {
    @apply mr-1 text-center;
    width: 25px !important;
  }
  &.router-link-exact-active {
    @apply bg-gray-500;
  }
}

.sidebar {
  @apply bg-gray-800 text-white min-h-screen z-30;
  transition: all ease 0.3s;
  width: $sidebar-width;
  min-width: $sidebar-width;
  margin-left: -100%;
  &.--active {
    margin-left: 0px;
    left: 0px;
  }

  &__header {
    @apply bg-gray-900 py-2 shadow-lg select-none z-20 relative;
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
    margin-left: -$sidebar-width;
  }
}
</style>
