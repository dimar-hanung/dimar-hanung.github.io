export default {
  namespaced: true,
  state: () => ({
    isSidebar: true
  }),
  mutations: {
    SET_IS_SIDEBAR(state, data) {
      state.isSidebar = data;
    }
  },
  actions: {
    setIsSidebar({ commit }, data) {
      commit("SET_IS_SIDEBAR", data);
    }
  }
};
