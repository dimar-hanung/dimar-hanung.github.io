<template>
  <div class="grid place-items-center h-screen">
    <canvas id="bintangDraw"></canvas>
    <div class="z-20">
        <div class="text-message text-3xl font-bold">
          Sedang Maintenance
        </div>
        <div class="text-message text-lg">
          Dimar Hanung
        </div>
    </div>
  </div>
</template>

<script>
import Star from "./Star.js"
export default {
  data() {
    return {
      emot: "😀"
    };
  },
  methods: {
    
  },
  mounted() {
    Star(document.getElementById("bintangDraw"));
  }
};
</script>

<style lang="scss" scoped>
canvas {
  background: black;
  position: absolute;
}
.text-message {
  @apply text-white cursor-pointer select-none;
  z-index: 99;
  &::after {
    content: " 😁";
  }
  &:hover::after {
    content: " 😅";
  }
  &:active::after {
    content: " 😡";
  }
}
</style>
