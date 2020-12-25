<template>
  <div class="navbar bg-gray-400 align-middle flex place-items-center px-4">
    <div class="navbar__header flex">
      <div class="navbar__logo pr-2">
        <font-awesome-icon class="h-full text-5xl" :icon="['fab', 'vuejs']" />
      </div>
      <div class="navbar__title pr-4">
        <div class="navbar__title-top">Dimar Hanung Prakoso</div>
        <div class="navbar__title-bot">Front-End Dev</div>
      </div>
    </div>
    <div
      class="navbar__bars bg-gray-400 p-2 shadow rounded cursor-pointer"
      @click="setSidebar"
    >
      <font-awesome-icon :icon="['fas', 'bars']" />
    </div>
  </div>
</template>

<script>
import { mapActions } from "vuex";

export default {
  methods: {
    ...mapActions(["setSidebar"])
  }
};
</script>

<style lang="scss" scoped>
.navbar {
  height: 65px;
  &__bars {
    transition: all ease 0.3s;
    &:hover {
      @apply shadow-lg;
    }
  }
}
</style>
