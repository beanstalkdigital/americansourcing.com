<template>
  <div id="app" class="eversight-resource-library__wrapper" :class="loaded ? '' : '--loading'">
    <Filters v-if="!excludedPost" :resources="resources" @filtersChanged="filterResults" />
    <template v-if="loaded">
      <Grid :resources="resources" />

      <p v-if="displayLoadMore" class=" eversight-resource-library__loadMore" style="text-align: center;">
        <a
          href="#"
          class="button -primary -textDarkGray"
          :class="loadingMore ? '' : '-arrowRight'"
          @click.prevent="loadMore"
          v-html="loadMoreButton" />
      </p>

    </template>
    <template v-else>
      <Loader />
    </template>
  </div>
</template>

<script>
import _ from 'lodash'
import Loader from '../../components/Loader/Loader.vue'
import Grid from '../../components/ResourceLibrary/Grid/Grid.vue'
import Filters from '../../components/ResourceLibrary/Filters/Filters.vue'

export default {
  data() {
    return {
      resources: [],
      loaded: false,
      loadingMore: false,
      perPage: 12,
      page: 1,
      displayLoadMore: true,
      excludedPost: false,
      totalPages: 100,
      filters: {}
    }
  },

  beforeMount() {
    // Override perPage setting based on $root data
    if ( !_.isUndefined(this.$root._data.perPage) ) {
      this.perPage = this.$root._data.perPage
    }

    // Override displayLoadMore setting based on $root data
    if ( !_.isUndefined(this.$root._data.displayLoadMore) ) {
      this.displayLoadMore = this.$root._data.displayLoadMore
    }

    // Override displayLoadMore setting based on $root data
    if ( !_.isUndefined(this.$root._data.excludedPost) ) {
      this.excludedPost = this.$root._data.excludedPost
    }

    this.getResources()
  },

  computed: {
    loadMoreButton() {
      return this.loadingMore ? '<i class="fal fa-circle-notch fa-spin fill-brandPrimary color-brandPrimary"></i>' : 'Load More';
    }
  },

  methods: {
    getResources() {
      var self = this
      axios.get('/wp-json/wp/v2/posts', {
        params: {
          page: self.page,
          per_page: self.perPage,
          exclude: self.excludedPost ? self.excludedPost : 0,
          ...self.filters
        }
      })
      .then(res => {
        if (!_.isUndefined(res.headers['x-wp-totalpages'])) {
          self.totalPages = _.toNumber(res.headers['x-wp-totalpages'])
        }

        // Hide laod more button if we're displaying all posts
        if (self.totalPages <= self.page) {
          self.displayLoadMore = false
        }

        self.resources.push(...res.data)
        self.loaded = true
        this.loadingMore = false
      })
      .catch((error) => {
        console.log(error)
        self.loaded = true
      })
    },

    resetPostData() {
      this.page = 1
      this.totalPages = 100
      this.displayLoadMore = true
      this.resources = []
      this.loaded = false
    },

    loadMore() {
      this.page += 1
      this.loadingMore = true
      return this.getResources()
    },

    filterResults(val) {
      this.filters = {}

      for (let i = 0; i < val.length; i++) {
        if (!_.isEmpty(val[i].value) || _.isNumber(val[i].value)) {
          this.filters[val[i].type] = val[i].value
        }
      }

      this.resetPostData()
      this.getResources()
    }
  },

  components: {
    Grid,
    Loader,
    Filters
  }
}
</script>

<style scoped>
a.button {
  min-width: 143px;
}
</style>
