import Vue from "vue";
import Vuex from "vuex";
import modules from "./modules";
Vue.use(Vuex);

export const store = new Vuex.Store({
  state: {
    isSidebar: true
  },
  mutations: {},
  actions: {},
  modules
});
