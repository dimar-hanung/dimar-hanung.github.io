import Vue from "vue";
import Vuex from "vuex";
import modules from "./modules";
Vue.use(Vuex);

export const store = new Vuex.Store({
  state: {
    isSidebar: true
  },
  mutations: {
    setSidebar(state) {
      state.isSidebar = !state.isSidebar;
    }
  },
  actions: {
    setSidebar({ commit }) {
      commit("setSidebar");
    }
  },
  modules
});
