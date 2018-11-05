<template>
    <div>
        <h1>
            これは検索ページです
        </h1>
        <h2>エリアを変える</h2>
        <areas></areas>
    </div>
</template>

<script>
  const AreasComponent = require('./AreasComponent');
  export default {
    components: {
      areas: AreasComponent
    },
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>
