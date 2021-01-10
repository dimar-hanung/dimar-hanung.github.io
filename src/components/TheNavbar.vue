<template>
  <div class="navbar bg-primary-1 align-middle flex place-items-center px-4">
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
      class="navbar__bars p-2 border border-primary-2 w-10 text-center rounded cursor-pointer"
      @click="setIsSidebar(!isSidebar)"
    >
      <font-awesome-icon :icon="['fas', 'bars']" />
    </div>
  </div>
</template>

<script>
import { mapActions, mapState } from "vuex";

export default {
  methods: {
    ...mapActions("layoutData", ["setIsSidebar"])
  },
  computed: {
    ...mapState("layoutData", ["isSidebar"])
  },
  mounted() {
    window.innerWidth <= 640 && this.setIsSidebar(false);
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
