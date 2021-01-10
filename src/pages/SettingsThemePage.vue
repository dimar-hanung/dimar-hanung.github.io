<template>
  <div class="flex flex-wrap">
    <div class="pr-2">
      <label for="themeLight" class="theme__preview --light"> </label>
      <div class="my-2">
        <input
          @input="selectTheme('light')"
          ref="themeLight"
          class="mr-1"
          id="themeLight"
          type="radio"
          name="theme-select"
        />
        <label for="themeLight">Light</label>
      </div>
    </div>
    <div class="px-2">
      <label for="themeDark" class="theme__preview --dark"> </label>
      <div class="my-2">
        <input
          @input="selectTheme('dark')"
          ref="themeDark"
          class="mr-1"
          id="themeDark"
          type="radio"
          name="theme-select"
        />
        <label for="themeDark">Dark</label>
      </div>
    </div>
    <div class="px-2">
      <label for="themeVue" class="theme__preview --vue"> </label>
      <div class="my-2">
        <input
          @input="selectTheme('vue')"
          ref="themeVue"
          class="mr-1"
          id="themeVue"
          type="radio"
          name="theme-select"
        />
        <label for="themeVue">Vue</label>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    selectTheme(theme) {
      console.log(theme);
      const d = document.getElementById("app");
      localStorage.setItem("theme", theme);
      d.setAttribute("class", `theme-${theme} text-white`);
    }
  },
  mounted() {
    const theme = localStorage.getItem("theme");
    switch (theme) {
      case "dark":
        this.$refs.themeDark.checked = true;
        break;
      case "light":
        this.$refs.themeLight.checked = true;
        break;
      case "vue":
        this.$refs.themeVue.checked = true;
        break;
    }
  }
};
</script>

<style lang="scss" scoped>
.theme {
  &__preview {
    cursor: pointer;
    display: block;
    width: 100px;
    height: 100px;
    &.--light {
      @apply bg-gray-100 shadow;
    }
    &.--dark {
      @apply bg-gray-900 shadow;
    }
    &.--vue {
      @apply bg-green-500 shadow;
    }
  }
}
</style>
