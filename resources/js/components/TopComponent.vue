<template>
    <div>
        <h1>
            これはトップページです
        </h1>
        <nav aria-label="パンくずリスト" class="mb-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <router-link to="/">ホーム</router-link>
                </li>
            </ol>
        </nav>
        <h2>検索画面に行く！</h2>

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
  };
</script>
