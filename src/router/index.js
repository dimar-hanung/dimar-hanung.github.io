import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "HomePage",
    component: () => import("../pages/HomePage.vue")
  },
  {
    path: "/about",
    name: "AboutPage",
    component: () => import("../pages/AboutPage.vue")
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
