import Vue from 'vue';
import VueResource from "vue-resource";
Vue.use(VueResource);
import router from "./router";
import App from './App.vue';
new Vue({http: {root: 'http://api.elixir.local'}, router, render: h => h(App)}).$mount("#app");
