<template>
  <div class="fade-in">
    <!-- <img alt="Vue logo" src="../assets/logo.png" /> -->
    <div class="flex md:flex-no-wrap flex-wrap mt-5">
      <div class="w-full md:w-4/6 pr-0 md:pr-4">
        <tw-card
        theme="bg-red-400"
        >
          <template #header>lah?</template>
          kok?
          <template #footer>ini footer</template>
        </tw-card>
      </div>
      <div class="w-full md:w-2/6 personal">
        <tw-card>
          <template #header>Personal</template>
          oke
        </tw-card>
      </div>
    </div>
  </div>
</template>

<style lang="scss">

  .personal{
    min-width: 12rem;
  }


</style>

<script>
// @ is an alias to /src
// import TwCards from "@/components/TwCards.vue";

export default {
  name: "Home",
  components: {
    // TwCards
  }
};
</script>
