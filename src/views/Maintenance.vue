<template>
  <div class="grid place-items-center h-screen">
    <canvas class="left-0 top-0" id="bintangDraw"></canvas>
    <div class="wrapper z-20 p-4 border rounded-md">
      <div class="text-message text-3xl">
        <b>Happy New Year</b>
      </div>
      <div class="text-white text-lg">
        Dimar Hanung
      </div>
      <a
        href="https://api.whatsapp.com/send?phone=87837092992&text=%20"
        class="text-white mt-1 hover:text-yellow-400 bloc"
      >
        WhatsApp : 087793110422
      </a>
    </div>
  </div>
</template>

<script>
import Star from "./Star.js";
export default {
  data() {
    return {
      emot: "🎉"
    };
  },
  methods: {},
  mounted() {
    Star(document.getElementById("bintangDraw"));
  }
};
</script>

<style lang="scss" scoped>
canvas {
  background: linear-gradient(180deg, black, #003e76);
  position: absolute;
}
.wrapper {
  // backdrop-filter: blur(1px);
}
.text-message {
  @apply text-white cursor-pointer select-none;
  z-index: 99;
  &::after {
    content: " 🎉";
  }
  &:hover::after {
    content: " 😅";
  }
  &:active::after {
    content: " 😡";
  }
}
</style>
