import { createI18n } from "vue-i18n";

export default defineNuxtPlugin(({ vueApp }) => {
  const i18n = createI18n({
    legacy: false,
    globalInjection: true,
    locale: "en",
    messages: {
      en: {
        hello: "Hello, My Name {name}!",
        collab: "Open to collaborate",

        about: {
          title: "About Me",
          year: "{year} year old",
          job: "{job} at {at}",
          study1: "Studies for TKJ at {at}",
          study2: "Studies for Information System at {at}",
          address: "Lives in Tangerang Selatan,  ",
          iLike: "I like to",
        },
      },
      id: {
        hello: "Halo ges, nama ku {name}",
        collab: "Saya sedia join projek :D",
        about: {
          title: "Tentangku",
          year: "Sudah {year} tahun di dunia",
          job: "{job} di {at}",
          study1: "Alumni {at} (TKJ)",
          study2: "Sedang kuliah di {at} (Sistem Informasi)",
          address: "Domisili di Tangerang Selatan,  ",
          iLike: "Aku suka",
        },
      },
    },
  });

  vueApp.use(i18n);
});
