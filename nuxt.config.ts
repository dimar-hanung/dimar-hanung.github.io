import { defineNuxtConfig } from "nuxt";

// https://v3.nuxtjs.org/api/configuration/nuxt.config
export default defineNuxtConfig({
  ssr: false,
  generate: {
    crawler: true,
  },

  app: {
    head: {
      link: [{ rel: "icon", href: "/favicon.png" }],
    },
  },
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
