<template>
  <div
    :class="
      `sidebar sm:h-auto h-full absolute sm:relative w-full bg-primary-1 min-h-screen z-30 ${
        isSidebar ? '--active' : ''
      }`
    "
  >
    <div class="block mt-10 ">
      <router-link to="/project" @click.native="ifMobile"
        ><font-awesome-icon :icon="['fas', 'home']" /> Project
        Lists</router-link
      >
      <router-link to="/about" @click.native="ifMobile"
        ><font-awesome-icon :icon="['fas', 'book']" /> About</router-link
      >
      <router-link to="/certificate" @click.native="ifMobile"
        ><font-awesome-icon :icon="['fas', 'medal']" /> Sertifikat</router-link
      >
      <router-link to="/settings" @click.native="ifMobile"
        ><font-awesome-icon :icon="['fas', 'paint-brush']" /> Theme</router-link
      >
    </div>
  </div>
</template>

<script>
import { mapActions, mapState } from "vuex";
export default {
  computed: {
    ...mapState("layoutData", ["isSidebar"])
  },
  methods: {
    ...mapActions("layoutData", ["setIsSidebar"]),
    ifMobile() {
      window.innerWidth <= 640 && this.setIsSidebar();
    }
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
    @apply bg-primary-3 pl-5;
  }
  svg {
    @apply mr-1 text-center;
    width: 25px !important;
  }
  &.router-link-active {
    @apply bg-primary-0 text-primary-active;
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
