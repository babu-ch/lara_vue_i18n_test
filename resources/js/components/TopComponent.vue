<template>
    <div>
        <p>
            {{$t('message.page_description')}}
        </p>
        <nav aria-label="パンくずリスト" class="mb-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <router-link to="/">{{$t('common.top_page')}}</router-link>
                </li>
            </ol>
        </nav>
        <h2>
            {{$t('message.to_search_page')}}
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
    i18n: {
      messages: {
        en: {
          message: {
            page_description: 'Here is TopPage!',
            to_search_page: 'Go to SearchPage!',
          }
        },
        ja: {
          message: {
            page_description: 'ここはトップページです！',
            to_search_page: '検索ページへ行く！',
          }
        }
      }
    }
  };
</script>
