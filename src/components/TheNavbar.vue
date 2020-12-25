<template>
  <div class="navbar">
    <div class="navbar__bars" @click="setSidebar">
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
  @apply bg-gray-300 align-middle flex place-items-center px-4;
  height: 65px;
  &__bars {
    @apply bg-gray-400 p-2 shadow rounded cursor-pointer;
    transition: all ease 0.3s;
    &:hover {
      @apply shadow-lg;
    }
  }
}
</style>
