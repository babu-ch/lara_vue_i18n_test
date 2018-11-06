<template>
    <div>
        {{$t('message.switch')}}
        <span class="btn btn-primary" @click="langTo('ja')">JP</span>
        <span class="btn btn-primary" @click="langTo('en')">EN</span>
    </div>
</template>

<style lang="scss" scoped>
    div {
        margin-bottom: 10px;
        padding: 10px;
        border-bottom: 1px solid #CCC;
    }
</style>

<script>
  export default {
    methods: {
      langTo: function (lang) {
        this.$cookie.set('lang', lang)
        this.$parent.lang = lang
      }
    },
    i18n: {
      messages: {
        en: {
          message: {
            switch: 'switch locale!'
          }
        },
        ja: {
          message: {
            switch: '言語切替！'
          }
        }
      }
    }
  };
</script>
