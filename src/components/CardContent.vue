<template>
  <div class="card shadow rounded">
    <div class="card__header text-xl font-bold border-b rounded-t">
      <slot name="header"></slot>
    </div>
    <div class="card__body">
      <slot></slot>
    </div>
    <div
      v-if="$slots.footer"
      :class="`${theme || ''} card__footer border-t rounded-b`"
    >
      <slot name="footer"></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: ["theme"]
};
</script>

<style lang="scss" scoped>
$padding: 1rem;
.card {
  &__header {
    padding: $padding;
  }
  &__footer {
    padding: $padding;
  }
  &__body {
    padding: $padding;
  }
}
</style>
