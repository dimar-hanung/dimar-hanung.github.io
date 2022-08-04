import { defineNuxtConfig } from "nuxt";

// https://v3.nuxtjs.org/api/configuration/nuxt.config
export default defineNuxtConfig({
  ssr: false,
  generate: {
    crawler: true,
  },

  // async routes() {
  //   const { $content } = require("@nuxt/content");
  //   const files = await $content({ deep: true })
  //     .where({ extension: { $eq: ".md" } })
  //     .only(["path"])
  //     .fetch();

  //   return files.map((file) => (file.path === "/index" ? "/" : file.path));
  // },
  // nitro: {
  //   preset: "service-worker",
  //   prerender: {
  //     routes: ["/sitemap.xml"],
  //   },
  // },

  modules: ["@nuxt/content"],
  content: {
    // https://content.nuxtjs.org/api/configuration

    highlight: {
      // Theme used in all color schemes.
      theme: "monokai",
      // OR
    },
  },
  build: {
    postcss: {
      postcssOptions: {
        plugins: {
          tailwindcss: {},
          autoprefixer: {},
        },
      },
    },
  },
  css: ["~/assets/css/tailwind.css"],
});
