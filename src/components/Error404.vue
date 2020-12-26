<template>
  <div class="grid place-items-center">
    <div>
      <div class="py-4"><img src="@/assets/static/404.svg" alt="" /></div>
      Halaman
      <span class="text-red-500 font-bold">{{ $route.path }}</span> tidak
      ditemukan.
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped></style>
