require('./bootstrap')

import VueRouter from 'vue-router'
import VueCookie from 'vue-cookie'
import VueI18n from 'vue-i18n'
// import Vuex from 'vuex'

window.Vue = require('vue')
Vue.use(VueRouter)
Vue.use(VueCookie)
Vue.use(VueI18n)
// Vue.use(Vuex)

const i18n = new VueI18n({
  messages: require('./language.json')
});


Vue.component('switch-langage', require('./components/SwitchLanguageComponent'));

const router = new VueRouter({
  mode: 'history',
  routes: [
    {path: '/', component: require('./components/TopComponent')},
    {path: '/search/:pref', component: require('./components/SearchComponent')},
    {path: '/detail/:id', component: require('./components/DetailComponent'), name: 'Detail'},
  ]
})

const app = new Vue({
  router,
  i18n,
  data() {
    return {
      lang: this.$cookie.get('lang')
    }
  },
  watch: {
    lang() {
      this.$i18n.locale = this.lang
    },
    '$route'(to, from) {
      const path = to.path
      this.fetchLocale(path)
    },
  },
  mounted() {
    this.$i18n.locale = this.lang
    this.fetchLocale(this.$route.fullPath)
  },
  methods :{
    getPathParam(path) {
      if (path.includes('/search')) {
        return '/search'
      } else if (path.includes('/detail')) {
        return '/detail'
      }
      return path
    },
    fetchLocale(path) {
      let pathParam = this.getPathParam(path)
      if (this.$i18n.messages[path]) {
        return
      }
      axios.get('/api/language?path=' + pathParam).then((response) => {
        _.each(response.data, (langValue, langKey) => {
          // this.$i18n.messages[langKey][pathParam] = langValue[pathParam]
          this.$i18n.mergeLocaleMessage(langKey, langValue);
        })
      });
    }
  }
})

app.$mount('#app')
