require("./bootstrap");

window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

window.Vue = require("vue");

import Vue from "vue";
import VueRouter from "vue-router";

import App from "./components/App.vue";

Vue.use(VueRouter);

import Home from "./pages/Home";
import Posts from "./pages/Posts";
import AboutUs from "./pages/About";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/posts",
            name: "posts",
            component: Posts,
        },
        {
            path: "/about",
            name: "about",
            component: AboutUs,
        },
    ],
});

const app = new Vue({
    el: "#root",
    render: (h) => h(App),
    router,
});
