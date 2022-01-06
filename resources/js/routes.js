import VueRouter from "vue-router";
import Example2 from "./components/Example2";
import Bookables from "./bookables/Bookables";

const routes = [
    {
        path: "/",
        component: Bookables,
        name: "home",
    },

    {
        path: "/example2",
        component: Example2,
        name: "example2",
    },
];

const router = new VueRouter({
    mode: 'history',
    routes, // short for `routes: routes`
  });

  export default router;
