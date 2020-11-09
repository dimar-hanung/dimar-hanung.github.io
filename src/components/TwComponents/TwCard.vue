<template>
  <div class="card">
    <div class="card__header">
        <slot name="header"></slot>
    </div>
    <div class="card__body">
      <slot></slot>
    </div>
    <div v-if="$slots.footer" :class="`${theme || ''} card__footer`">
      <slot name="footer"></slot>
    </div>
  </div>
</template>

<script>
  export default {
    props:["theme"]
  };
</script>

<style lang="scss" scoped>

$padding:1rem;
  .card {
    @apply shadow rounded;
    &__header {
      @apply text-xl font-bold border-b rounded-t;
      padding:$padding;
    }
    &__footer{
      @apply border-t rounded-b;
      padding:$padding;
    }
    &__body{
      padding:$padding;
    }

  }
</style>
