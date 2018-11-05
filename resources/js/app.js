
require('./bootstrap');

import VueRouter from 'vue-router';

window.Vue = require('vue');
Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes: [
    {path:'/', component: require('./components/TopComponent')},
    {path:'/search/:pref', component: require('./components/SearchComponent')},
    {path:'/detail/:id', component: require('./components/DetailComponent'), name:'Detail'},
  ]
});

const app = new Vue({
  router
});

app.$mount('#app');
