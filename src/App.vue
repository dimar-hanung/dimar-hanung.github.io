<template>
  <div id="app">
    <div class="flex min-h-screen bg-gray-200">
      <v-sidebar v-if="!$route.meta.hideNavbar" />
      <!-- <sidebar-v2 v-if="!$route.meta.hideNavbar" /> -->
      <router-view class="container mx-auto bg-purple-100 shadow-lg" />
    </div>
  </div>
</template>
<script>
import VSidebar from "@/components/TheSidebar.vue";
// import SidebarV2 from "@/components/TheSidebarV2.vue";

export default {
  components: {
    VSidebar
    // SidebarV2
  }
};
</script>
<style lang="scss"></style>
