<template>
  <div class="px-8 pb-8 pt-16">
    <div class="p-8 bg-primary-card w-full relative">
      <div class="settings__tab flex absolute">
        <router-link to="/settings/theme">Theme</router-link>
        <router-link to="/settings/contact">Contact</router-link>
        <router-link to="/settings/tech-info">Tech Info</router-link>
      </div>
      <div>
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.settings {
  &__tab {
    top: 0;
    left: 0;
    transform: translateY(-100%);
    a {
      @apply bg-primary-card p-2 mr-1 text-sm rounded-t;
      &.router-link-active {
        @apply text-primary-active;
      }
    }
  }
}
</style>
