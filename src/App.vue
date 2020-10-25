<template>
  <div id="app">
    <div class="flex min-h-screen">
      <v-sidebar v-if="!$route.meta.hideNavbar" />
      <router-view class="container mx-auto" />
    </div>
  </div>
</template>
<script>
import VSidebar from "@/components/Sidebar.vue";

export default {
  components: {
    VSidebar
  }
};
</script>
<style lang="scss"></style>
