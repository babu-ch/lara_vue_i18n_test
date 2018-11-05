<template>
    <div>
        <span v-for="url in searchUrls">
            <router-link :to="url.url" class="ml-3 mb-3 btn btn-primary">{{url.name}}</router-link>
        </span>
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
