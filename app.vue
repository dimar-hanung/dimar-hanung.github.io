<template>
  <div
    :class="[
      darkMode ? 'dark' : 'light',
      'transition-all',
      'duration-700',
      'antialiased',
    ]"
  >
    <NuxtPage />
  </div>
</template>
<script setup>
import "@/assets/css/tailwind.css";

const darkMode = useDarkMode();
</script>
