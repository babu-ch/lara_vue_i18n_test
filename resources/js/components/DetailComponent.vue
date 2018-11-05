<template>
    <div>
        <p>
            これは詳細ページです
        </p>
        <nav aria-label="パンくずリスト" class="mb-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <router-link to="/">ホーム</router-link>
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
    mounted() {
      const params = this.$route.params
      const id = params.id
      axios.get('/api/detail/' + id).then((response) => {
        this.hotel = response.data;
        this.searchUrl = '/search/' + this.hotel.pref_name
      })
    }
  }
</script>
