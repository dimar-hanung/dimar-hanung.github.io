<template>
  <div>
    <div class="px-8 py-4">List Project Portofolio</div>
    <search-content
      :items="projects"
      :keys="['title']"
      v-on:filtered="updateData($event)"
      class="px-8 text-black"
    />
    <div class="px-8 flex flex-wrap justify-center">
      <div
        v-for="(project, i) in localProjectsData"
        :key="i"
        class="card-box p-4 w-1/4 my-0"
      >
        <div class="shadow bg-primary-card rounded-lg">
          <div class="border-b p-2">{{ project.title }}</div>
          <div class="flex flex-wrap p-2">
            <div
              class="text-xs bg-primary-1 text-primary-active px-2 m-1 rounded-full"
              v-for="(category, i) in project.category"
              :key="'A' + i"
            >
              {{ category }}
            </div>
          </div>
          <div class="flex rounded-b-lg bg-primary-3">
            <a
              target="_blank"
              :href="project.github"
              class="text-xl p-2 rounded-bl-lg "
            >
              <font-awesome-icon :icon="['fab', 'github']" />
            </a>
            <div
              class="cursor-not-allowed select-none w-full grid place-items-center px-2 text-sm"
              title="Deskripsi belum siap"
            >
              Deskripsi
            </div>
            <a
              target="_blank"
              :href="project.link"
              class="w-full grid place-items-center rounded-br-lg px-2 text-sm"
            >
              Demo
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState } from "vuex";
import SearchContent from "@/components/SearchContent.vue";
export default {
  data() {
    return {
      localProjectsData: []
    };
  },
  components: { SearchContent },
  computed: {
    ...mapState("projectData", ["projects"])
  },
  methods: {
    updateData(e) {
      this.localProjectsData = e;
      console.log(e);
    }
  },
  mounted() {
    this.localProjectsData = this.projects;
  }
};
</script>

<style lang="scss" scoped>
.card-box {
  min-width: 280px;
  height: max-content;
}
</style>
