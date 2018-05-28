<template>
  <a href="/customers" :title="study.title.rendered" v-html="study.title.rendered" :style="backgroundImage" :class="loaded ? '' : 'loading'">
  </a>
</template>

<script>
export default {
  props: ["study", "loaded"],

  computed: {
    backgroundImage: function() {
      if ( !this.study.better_featured_image ) {
        return false
      }
      return `background-image: url(${this.study.better_featured_image.source_url});`
    }
  }
}
</script>
