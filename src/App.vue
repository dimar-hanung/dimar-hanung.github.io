<template>
  <div id="app">
    <div class="flex relative min-h-screen h-full bg-gray-200">
      <v-sidebar v-if="!$route.meta.hideNavbar" />
      <!-- <sidebar-v2 v-if="!$route.meta.hideNavbar" /> -->
      <div class="w-full h-auto">
        <v-navbar />
        <router-view
          class="container height-calc mx-auto bg-gray-100 shadow-lg"
        />
      </div>
    </div>
  </div>
</template>
<script>
import VSidebar from "@/components/TheSidebar.vue";
import VNavbar from "@/components/TheNavbar.vue";
// import SidebarV2 from "@/components/TheSidebarV2.vue";

export default {
  components: {
    VSidebar,
    VNavbar
    // SidebarV2
  }
};
</script>
<style lang="scss">
.height-calc {
  height: calc(100% - 80px);
}
</style>
