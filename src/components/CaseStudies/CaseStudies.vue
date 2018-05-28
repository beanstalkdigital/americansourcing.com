<template>
  <div class="eversight__caseStudies" :class="loaded ? '' : 'eversight__caseStudies--loading'">
    <template v-if="loaded">
      <case-study
        :key="study.id"
        class="eversight__caseStudies__item"
        v-for="study in caseStudies"
        :study="study"
        :loaded="loaded">
      </case-study>
    </template>
    <template v-else>
      <Loader />
    </template>
  </div>
</template>

<script>
import Loader from '../Loader/Loader.vue'
import CaseStudy from './CaseStudy.vue'

export default {
  data () {
    return {
      loaded: false,
      caseStudies: []
    }
  },

  beforeMount() {
    this.getData()
  },

  methods: {
    getData: function() {
      let self = this

      axios.get('/wp-json/wp/v2/case_study?filter[orderby]=menu_order&order=asc', {
        params: {
          per_page: 12
        }
      })
        .then((res) => {
          self.caseStudies = res.data
          self.loaded = true
        })
    }
  },

  components: {
    CaseStudy,
    Loader
  }
}
</script>
