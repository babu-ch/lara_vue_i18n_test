<template>
    <div>
        <h1>
            これは検索ページです
        </h1>
        <h2>エリアを変える</h2>
        <areas></areas>

        <ul>
            <li v-for="(hotel, id) in hotels">
                <!--<span class="btn btn-dark">hotel.pref_name</span>-->
                <router-link :to="{name:'Detail', params:{id}}">{{hotel.name}}</router-link>
            </li>
        </ul>
    </div>
</template>

<script>
  const AreasComponent = require('./AreasComponent');
  export default {
    data() {
      return {
        hotels: []
      }
    },
    components: {
      areas: AreasComponent
    },
    watch: {
      '$route'(to, from) {
        this.fetch()
      }
    },
    methods: {
      fetch() {
        const params = this.$route.params
        const prefName = params.pref
        axios.get('/api/search/' + prefName).then((response) => {
          this.hotels = response.data
        })
      }
    },
    mounted() {
      this.fetch()
    }
  }
</script>
