import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
  { path: "*", component: () => import("../components/Error404.vue") },
  { path: "/", redirect: "/project" },
  {
    path: "/project",
    name: "ProjectPage",
    component: () => import("../pages/ProjectPage.vue")
  },
  {
    path: "/about",
    name: "AboutPage",
    component: () => import("../pages/AboutPage.vue")
  },
  {
    path: "/certificate",
    name: "CertificatePage",
    component: () => import("../pages/CertificatePage.vue")
  },
  {
    path: "/settings",
    name: "SettingsPage",
    component: () => import("../pages/SettingsPage.vue")
  },
  {
    path: "/maintenance",
    name: "Maintenance",
    component: () =>
      import(/* webpackChunkName: "maintenance" */ "../pages/Maintenance.vue"),
    meta: { hideNavbar: true, reBuild: true }
  }
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes
});
// router.beforeEach((to, from, next) => {
//   if (to.matched.some(record => record.meta.reBuild)){
//     next();
//   }
//   else{ next({ name: 'Maintenance' })}
// })
export default router;
