
require('./bootstrap');

import VueRouter from 'vue-router';

window.Vue = require('vue');
Vue.use(VueRouter);


const Foo = { template: '<div>foo</div>'}

const router = new VueRouter({
  routers: [
    {path:'/', component: Foo}
  ]
});


Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
  el: '#app',
  router
});
