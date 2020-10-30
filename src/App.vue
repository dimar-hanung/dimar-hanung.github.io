<template>
  <div id="app">
    <div class="flex min-h-screen">
      <v-sidebar v-if="!$route.meta.hideNavbar" />
      <!-- <sidebar-v2 v-if="!$route.meta.hideNavbar" /> -->
      <router-view class="container mx-auto" />
    </div>
  </div>
</template>
<script>
import VSidebar from "@/components/Sidebar.vue";
// import SidebarV2 from "@/components/SidebarV2.vue";

export default {
  components: {
    VSidebar
    // SidebarV2
  }
};
</script>
<style lang="scss"></style>
