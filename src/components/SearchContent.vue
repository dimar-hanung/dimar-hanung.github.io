<template>
  <div>
    <input
      type="text"
      placeholder="cari..."
      class="w-full p-2 block my-2 shadow rounded-md outline-none"
      v-on:input="event => filterData(event.target.value)"
    />
  </div>
</template>

<script>
export default {
  props: {
    items: {
      type: Array,
      default: () => []
    }
  },
  methods: {
    filterData(val) {
      console.log("search", val);
      const filtered = this.items.filter(item => {
        // console.log(Object.values(data).indexOf(val) >= 0, val, data);
        return val
          .toLowerCase()
          .split(" ")
          .every(v => item.title.toLowerCase().includes(v));
      });
      console.log(this.items);
      this.$emit("filtered", filtered);
    }
  }
};
</script>

<style lang="scss" scoped></style>
