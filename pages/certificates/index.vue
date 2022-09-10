<template>
  <div
    class="container-certificates h-screen overflow-hidden text-white"
    @mousewheel="scrollCertificate"
    ref="certificateScreen"
  >
    <div
      class="vignate pointer-events-none h-screen w-screen fixed bg-red-50 z-10"
    ></div>

    <div class="text-white fixed top-0 z-10">{{ index }}</div>
    <div class="desc absolute left-0 z-10 h-full">
      <div class="mt-4">Title {{ certificates?.[Math.abs(index)]?.title }}</div>
    </div>
    <div v-for="(item, i) in Array(10)" :key="i">
      <div
        class="animate py-4 certificate max-w-xl shadow-lg rounded-lg mx-auto"
        :style="{
          height: `${certificateScreen?.offsetHeight / 2}px`,
          transform: `translateY(${
            ((certificateScreen?.offsetHeight || 0) / 2) * index +
            certificateScreen?.offsetHeight / 4
          }px) scale(${i == Math.abs(index) ? 1 : 0.75})`,
        }"
      >
        <div
          class="text-white text-center absolute -right-1/2 top-1/2 -translate-y-1/2 text-9xl"
        >
          {{ i + 1 }}
        </div>
        <img
          class="rounded-lg block mx-auto h-full"
          :src="certificates?.[i]?.imageUrl"
          alt=""
        />
      </div>
    </div>
  </div>
</template>

<script setup>
const scale = ref(1);
const index = ref(0);
const timer = ref(0);
const isScroll = ref(false);
const certificateScreen = ref();

const certificates = reactive([
  { imageUrl: "/assets/certificates/test-dome-js.jpg", title: "JAVASCRIPT" },
  { imageUrl: "/assets/certificates/test-dome-js.jpg", title: "JAVASCRIPT2" },
]);

const scrollCertificate = (e) => {
  if (timer.value !== null) {
    clearTimeout(timer.value);
  }
  if (!isScroll.value) {
    e.wheelDeltaY < 0 ? index.value-- : index.value++;
  }
  isScroll.value = true;

  timer.value = setTimeout(function () {
    isScroll.value = false;
  }, 100);
};
</script>

<style>
.container-certificates {
  background: radial-gradient(#262424, #000000f5);
}
.vignate {
  background: radial-gradient(#26242400, #000000f5 70%);
}
.animate {
  transition: all ease 0.3s;
  /* animation-duration: 0.5s;
  animation-name: animate-fade;
  animation-delay: 0.5s;
  animation-fill-mode: backwards; */
}

@keyframes animate-fade {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
</style>
