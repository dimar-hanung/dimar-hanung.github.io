<template>
  <div id="app" class="theme-light text-white">
    <button
      class="py-2 px-4 text-sm outline-none block w-full bg-blue-200 text-blue-800 text-left relative z-50 top-0 left-0"
      v-if="updateExists"
      @click="refreshApp"
    >
      <font-awesome-icon :icon="['fa', 'info-circle']" /> Ada update baru nih,
      klik sini dulu yaa... 😀
    </button>
    <div class="relative max-h-screen overflow-hidden">
      <v-navbar />
      <!-- <sidebar-v2 v-if="!$route.meta.hideNavbar" /> -->
      <div class="w-full flex relative h-full">
        <v-sidebar v-if="!$route.meta.hideNavbar" />
        <router-view
          class="w-full relative height-calc overflow-auto mx-auto bg-primary-0 shadow-lg"
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
  data() {
    return {
      refreshing: false,
      registration: null,
      updateExists: false
    };
  },
  components: {
    VSidebar,
    VNavbar
    // SidebarV2
  },
  created() {
    document.addEventListener("swUpdated", this.showRefreshUI, {
      once: true
    });
    if (navigator.serviceWorker) {
      navigator.serviceWorker.addEventListener("controllerchange", () => {
        if (this.refreshing) return;
        this.refreshing = true;
        window.location.reload();
      });
    }
    console.log("done");
  },
  mounted() {
    window.onload = function() {
      if (!localStorage.getItem("theme")) {
        this.selectTheme("dark");
      }
    }.bind(this);
  },
  methods: {
    selectTheme(theme) {
      const d = document.getElementById("app");
      localStorage.setItem("theme", theme);
      d.setAttribute("class", `theme-${theme} text-white`);
    },
    showRefreshUI(e) {
      this.registration = e.detail;
      this.updateExists = true;
    },
    refreshApp() {
      this.updateExists = false;
      if (!this.registration || !this.registration.waiting) {
        return;
      }
      this.registration.waiting.postMessage("skipWaiting");
    }
  }
};
</script>
<style lang="scss">
.height-calc {
  height: calc(100vh - 65px);
  max-height: calc(100vh - 65px);
}
</style>
