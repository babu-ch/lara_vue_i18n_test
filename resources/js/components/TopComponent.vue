<template>
    <div>
        <h1>
            これはトップページです
        </h1>
        <h2>検索画面に行く！</h2>
        <ul>
            <li v-for="url in searchUrls">
                <router-link :to="url.url">{{url.name}}</router-link>
            </li>
        </ul>
    </div>
</template>

<script>
  export default {
    data: function () {
      return {
        searchUrls: [
          {url:'/search/all', name: 'ぜんぶ'},
          {url:'/search/hokkaido', name: 'ほっかいど'},
          {url:'/search/tokyo', name: 'とうきょう'},
          {url:'/search/okinawa', name: 'おきなわ'},
        ],
      }
    },
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>
