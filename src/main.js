import Vue from "vue";
import App from "./App.vue";
import "./registerServiceWorker";
import router from "./router";
import store from "./store";
import "@/assets/styles/index.scss";
import { library } from "@fortawesome/fontawesome-svg-core";
import { fas } from "@fortawesome/free-solid-svg-icons";
import { fab } from "@fortawesome/free-brands-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
library.add(fas);
library.add(fab);
Vue.component("font-awesome-icon", FontAwesomeIcon);
Vue.config.productionTip = false;
const req = require.context("./components/TwComponents/", true, /\.(js|vue)$/i);
req.keys().map((key) => {
  const name = key.match(/\w+/)[0];
  return Vue.component(name, req(key).default);
});
new Vue({
  router,
  store,
  render: (h) => h(App),
}).$mount("#app");
