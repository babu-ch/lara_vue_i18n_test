<template>
    <div>
        <p>
            {{$t('/detail.page_description')}}
        </p>
        <nav aria-label="パンくずリスト" class="mb-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <router-link to="/">{{$t('common.top_page')}}</router-link>
                </li>
                <li class="breadcrumb-item">
                    <router-link :to="searchUrl">{{hotel.pref_name}}</router-link>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{hotel.name}}</li>
            </ol>
        </nav>
        <h2>{{hotel.name}}</h2>
        <div>
            {{hotel.description}}
        </div>
    </div>
</template>

<script>
  export default {
    props: ['lang'],
    data() {
      return {
        hotel: {},
        searchUrl: '',
      }
    },
    watch: {
      lang: function () {
        this.fetch()
      }
    },
    mounted() {
        this.fetch()
    },
    methods: {
      fetch() {
        const params = this.$route.params
        const id = params.id
        axios.get('/api/detail/' + id).then((response) => {
          this.hotel = response.data;
          this.searchUrl = '/search/' + this.hotel.pref_name
        })
      }
    }
  }
</script>
