<template>
  <a :href="resource.link" class="eversight-resource-library__grid__item">
    <div class="eversight-resource-library__grid__item__img" :style="backgroundImage">
      <template v-if="!backgroundImage">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.24 41.86" class="eversight-resource-library__grid__item__img--placeholder">
        <title>img-placeholder</title><g data-name="Layer 2"><g id="Main_Artwork" data-name="Main Artwork"><path class="img-placeholder-cls-1" d="M10.46,19.43A4.49,4.49,0,1,0,6,15a4.49,4.49,0,0,0,4.48,4.48Zm0-7.36A2.88,2.88,0,1,1,7.59,15a2.87,2.87,0,0,1,2.87-2.88Z"/><path class="img-placeholder-cls-1" d="M0,0V41.86H40.24V0ZM1.61,1.61h37V23.12L30.32,15.5a.8.8,0,0,0-1.14.06L21.3,24.19l-3.82-3.82a.81.81,0,0,0-1.1,0L2.92,32.19H1.61Zm37,38.63h-37V33.81h37ZM5.35,32.19,16.88,22l8.29,8.3a.81.81,0,0,0,1.14,0,.8.8,0,0,0,0-1.14l-3.87-3.87,7.39-8.09,8.8,8.07v6.88Z"/></g></g></svg>
        </template>
    </div>
    <div class="eversight-resource-library__grid__item__content">
      <h4 class="eversight-resource-library__grid__item__content__title" v-html="resource.title.rendered"></h4>
      <!-- <div class="eversight-resource-library__grid__item__content__date" v-html="date"></div> -->
    </div>
  </a>
</template>

<script>
let dateFormat = require('dateformat')

export default {
  props: ["resource"],
  mounted() {
  },

  computed: {
    backgroundImage() {
      let backgroundImage = false;

      // Do we have better_featured_image?
      if (!_.isEmpty(this.resource.better_featured_image) &&
          !_.isEmpty(this.resource.better_featured_image.media_details) &&
          !_.isEmpty(this.resource.better_featured_image.media_details.sizes.medium_large)) {
        backgroundImage = this.resource.better_featured_image.media_details.sizes.medium_large.source_url
      }

      // If not do we have medium?
      else if (!_.isEmpty(this.resource.better_featured_image) &&
        !_.isEmpty(this.resource.better_featured_image.media_details) &&
        !_.isEmpty(this.resource.better_featured_image.media_details.sizes.medium)) {
        backgroundImage = this.resource.better_featured_image.media_details.sizes.medium.source_url
      }

      // Oh well...
      else if (!_.isEmpty(this.resource.better_featured_image) &&
       !_.isEmpty(this.resource.better_featured_image.source_url)) {
        backgroundImage = this.resource.better_featured_image.source_url
      }

      if (backgroundImage) {
        return `background-image: url(${backgroundImage});`;
      }

      return false
    },

    date() {
      let date = new Date(this.resource.date)
      return dateFormat(date, "mmmm d, yyyy")
    }
  }
}
</script>

<style scoped>
.img-placeholder-cls-1{fill:#979797;}
</style>
