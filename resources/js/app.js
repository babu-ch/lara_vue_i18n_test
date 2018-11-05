
require('./bootstrap')

import VueRouter from 'vue-router'
import VueCookie from 'vue-cookie'
import VueI18n from 'vue-i18n'

window.Vue = require('vue')
Vue.use(VueRouter)
Vue.use(VueCookie)
Vue.use(VueI18n)

Vue.component('switch-langage', require('./components/SwitchLanguageComponent'));

const router = new VueRouter({
  mode: 'history',
  routes: [
    {path:'/', component: require('./components/TopComponent')},
    {path:'/search/:pref', component: require('./components/SearchComponent')},
    {path:'/detail/:id', component: require('./components/DetailComponent'), name:'Detail'},
  ]
})

const app = new Vue({
  router,
  data() {
    return {
      lang: 'jp'
    }
  }
})

app.$mount('#app')
