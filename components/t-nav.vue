<template>
  <div class="p-4 sticky top-0">
    <div
      class="container mx-auto bg-white dark:bg-slate-900 dark:shadow-2xl shadow-xl p-3 rounded flex justify-between border-2 border-transparent dark:border-indigo-300 dark:shadow-indigo-400"
    >
      <div></div>

      <div class="flex gap-4 place-items-center">
        <NuxtLink to="https://dimar-hanung.netlify.app/"
          ><div><button>Blog</button></div></NuxtLink
        >
        <!-- <div><button>Contact me</button></div> -->
        <font-awesome-icon
          class="text-xl text-yellow-500 cursor-pointer"
          :icon="['fa', 'moon']"
          @click="toggleDarkMode"
        />
        <div
          class="flex gap-x-2 place-items-center p-1 dark:hover:bg-slate-700 cursor-pointer rounded transition-all relative"
          @mouseover="isDropdownLang = true"
          @mouseleave="isDropdownLang = false"
          @click="isDropdownLang = false"
        >
          <img
            v-if="$i18n.locale == 'id'"
            src="@/assets/icon/id.png"
            alt=""
            class="w-5 inline-block"
          />
          <img
            v-else
            src="@/assets/icon/us.png"
            alt=""
            class="w-5 inline-block"
          />
          <font-awesome-icon :icon="['fa', 'angle-down']" />
          <div
            v-if="isDropdownLang"
            class="absolute w-full bg-slate-700 bottom-0 translate-y-full left-0"
          >
            <div
              class="flex p-1"
              @click="$i18n.locale = 'id'"
              v-if="$i18n.locale == 'en'"
            >
              <img src="@/assets/icon/id.png" alt="" class="w-5 block mr-1" />
              ID
            </div>
            <div class="flex p-1" @click="$i18n.locale = 'en'" v-else>
              <img src="@/assets/icon/us.png" alt="" class="w-5 block mr-1" />
              EN
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
const darkMode = useDarkMode();
const toggleDarkMode = () => {
  localStorage.theme = "light";
  darkMode.value = !darkMode.value;
};

const isDropdownLang = ref(false);
</script>
