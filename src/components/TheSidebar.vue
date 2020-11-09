<template>
  <div :class="`sidebar w-full sm:w-auto absolute sm:relative ${isSidebar ? '--active' : ''}`">
    <font-awesome-icon
      @click="isSidebar = true"
      :class="
        `sidebar__bars ${
          isSidebar ? 'opacity-0 hidden' : 'opacity-100 cursor-pointer'
        }`
      "
      :icon="['fas', 'bars']"
    />
    <div class="sidebar__header flex">
      <div class="sidebar__logo">
        <font-awesome-icon class="h-full text-5xl" :icon="['fab', 'vuejs']" />
      </div>
      <div class="sidebar__title">
        <div class="sidebar__title-top">Dimar Hanung Prakoso</div>
        <div class="sidebar__title-bot">Front-End Dev</div>
      </div>
    </div>
    <div class="sidebar__close" @click="isSidebar = false">
      <font-awesome-icon :icon="['fas', 'times']" /> Close
    </div>
    <div class="block bg-purple-700">
      <router-link to="/"
        ><font-awesome-icon :icon="['fas', 'home']" /> Home</router-link
      >
      <router-link to="about"
        ><font-awesome-icon :icon="['fas', 'book']" /> About</router-link
      >
      <router-link to="a"
        ><font-awesome-icon :icon="['fas', 'medal']" /> Sertifikat</router-link
      >
      <router-link to="b"><font-awesome-icon :icon="['fas', 'paint-brush']" /> Menuju</router-link>
      <router-link to="c">Menuju</router-link>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isSidebar: true
    };
  }
};
</script>

<style lang="scss">
@import "../assets/styles/variables";
$sidebar-width: 280px;
@mixin button-link{
   @apply block p-3 text-white;
    font-weight: bold;
    transition: all ease 0.3s;
    &:hover {
      @apply bg-purple-500 pl-5;
    }
    svg {
      @apply mr-1 text-center;
      width: 25px;
    }
    &.router-link-exact-active {
      @apply bg-purple-500;
    }
}



.sidebar {
  @apply bg-purple-800 text-white min-h-screen z-30;
  transition: all ease 0.3s;
  width: $sidebar-width;
  min-width: $sidebar-width;
  margin-left: -100%;
  &.--active {
    margin-left: 0px;
    left: 0px;
    
  }
  &__bars {
    @apply absolute text-black text-2xl;
    transition: all ease 0.3s;
    top: 10px;
    right: -35px;
  }
  &__close {
    @apply bg-purple-700 mb-10 cursor-pointer;
    position: relative;
  }
 
  &__header {
    @apply bg-purple-900 py-2 shadow-lg select-none z-20 relative;
  }
  &__logo {
    @apply px-2;
  }
  &__title-top {
    @apply border-b border-white text-lg font-bold;
  }
  &__title-bot {
    @apply text-sm;
    position: relative;
    transition: all ease 0.3s;
    transition-delay: 1s;
  }

  a{
    @include button-link;
  }
  .sidebar__close{
    @include button-link;
  }
}

@media screen and (min-width: $small){
  .sidebar{
    margin-left:-$sidebar-width;
  }
}

</style>
