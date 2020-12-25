import Vue from "vue";
import { library } from "@fortawesome/fontawesome-svg-core";
import {
  faHome,
  faBook,
  faMedal,
  faPaintBrush,
  faBars
} from "@fortawesome/free-solid-svg-icons";
import { faVuejs } from "@fortawesome/free-brands-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
library.add(faHome, faVuejs, faBook, faMedal, faPaintBrush, faBars);
Vue.component("font-awesome-icon", FontAwesomeIcon);
