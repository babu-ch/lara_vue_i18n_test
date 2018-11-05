<template>
    <div>
        <p>
            これは検索ページです
        </p>
        <nav aria-label="パンくずリスト" class="mb-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">
                    <router-link to="/">ホーム</router-link>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{prefName}}</li>
            </ol>
        </nav>
        <h2>エリアを変える</h2>
        <areas></areas>

        <ul>
            <li v-for="(hotel, id) in hotels">
                <span class="badge badge-primary">{{hotel.pref_name}}</span>
                <router-link :to="{name:'Detail', params:{id}}">{{hotel.name}}</router-link>
            </li>
        </ul>
    </div>
</template>

<style lang="scss" scoped>
    ul {
        list-style: none;
        padding: 0;
        li {
            border: 1px solid #CCC;
            padding: 20px;
            a {
                display: block;
                width: 100%;
                font-size: 1.5rem;
            }
        }
    }
</style>

<script>
  const AreasComponent = require('./AreasComponent');
  export default {
    data() {
      return {
        hotels: [],
        prefName: ''
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
        this.prefName = prefName
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
