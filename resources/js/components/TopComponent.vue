<template>
    <div>
        <p>
            {{$t('/.page_description')}}
        </p>
        <nav aria-label="パンくずリスト" class="mb-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <router-link to="/">{{$t('common.top_page')}}</router-link>
                </li>
            </ol>
        </nav>
        <h2>
            {{$t('/.to_search_page')}}
        </h2>

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
