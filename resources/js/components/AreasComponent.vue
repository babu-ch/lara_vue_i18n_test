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
          {url:'/search/all', name: 'All'},
          {url:'/search/hokkaido', name: 'Hokkaido'},
          {url:'/search/tokyo', name: 'Tokyo'},
          {url:'/search/okinawa', name: 'Okinawa'},
        ],
      }
    }
  }
</script>
