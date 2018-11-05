<template>
    <div>
        <h1>
            これは詳細ページです
        </h1>
        <h2>{{hotel.name}}</h2>
        <div>
            {{hotel.description}}
        </div>
    </div>
</template>

<script>
  export default {
    data() {
        return {
          hotel: {}
        }
    },
    mounted() {
      const params = this.$route.params
      const id = params.id
      axios.get('/api/detail/' + id).then((response) => {
        this.hotel = response.data;
      })
    }
  }
</script>
