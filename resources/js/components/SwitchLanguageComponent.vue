<template>
    <div>
        げんごきりかえ
        <span class="btn btn-primary" @click="langTo('jp')">JP</span>
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
      }
    }
  };
</script>
