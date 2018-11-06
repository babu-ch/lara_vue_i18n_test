<template>
    <div>
        <p>
            {{$t('message.page_description', {hotel_name: hotel.name})}}
        </p>
        <nav aria-label="パンくずリスト" class="mb-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <router-link to="/" append>{{$t('common.top_page')}}</router-link>
                </li>
                <li class="breadcrumb-item">
                    <router-link :to="searchUrl" append>{{hotel.pref_name}}</router-link>
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
    },
    i18n: {
      messages: {
        en: {
          message: {
            page_description: 'Here is {hotel_name} DetailPage!',
          }
        },
        ja: {
          message: {
            page_description: 'ここは{hotel_name}の詳細ページです！',
          }
        }
      }
    }
  }
</script>
