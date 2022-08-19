import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import {
  faLanguage,
  faMoon,
  faArrowRight,
  faAngleDown,
} from "@fortawesome/free-solid-svg-icons";

import {
  faInstagram,
  faLinkedin,
  faTwitter,
  faWhatsapp,
} from "@fortawesome/free-brands-svg-icons";

export default defineNuxtPlugin((nuxtApp) => {
  console.log("[Plugin]", "Font Awesome");
  //   library.add(faTwitter);
  //   library.add(faFacebook);
  library.add(
    faLanguage,
    faMoon,
    faArrowRight,
    faInstagram,
    faLinkedin,
    faTwitter,
    faWhatsapp,
    faAngleDown
  );
  nuxtApp.vueApp.component("font-awesome-icon", FontAwesomeIcon as any);
});
