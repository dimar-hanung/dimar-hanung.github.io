import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home
  },
  {
    path: "/about",
    name: "About",
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/About.vue")
  },
  {
    path: "/maintenance",
    name: "Maintenance",
    component: () =>
      import(/* webpackChunkName: "maintenance" */ "../views/Maintenance.vue"),
    meta: { hideNavbar: true, reBuild:true }
  }
];



const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes
});
router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.reBuild)){
    next();
  }
  else{ next({ name: 'Maintenance' })}
})
export default router;
