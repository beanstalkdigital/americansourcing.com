import 'es6-promise/auto'
import _ from 'lodash'
import Vue from 'vue'
import Vuex from 'vuex'
import Axios from 'axios'
import isEmpty from 'lodash.isempty'

window.isEmpty = isEmpty
window.axios = Axios
window._ = _

import CaseStudies from './components/CaseStudies/CaseStudies.vue'
import ResourceLibrary from './containers/ResourceLibrary/ResourceLibrary.vue'

let setupVue = {
  init: () => {
    document.addEventListener('DOMContentLoaded', setupVue.caseStudies)

    document.addEventListener('DOMContentLoaded', setupVue.resourceLibrary)

    document.addEventListener('DOMContentLoaded', setupVue.recentPosts)
  },

  caseStudies: () => {
    if (!document.getElementById('eversight-case-studies')) {
      return false;
    }

    new Vue({
      el: '#eversight-case-studies',
      render: h => h(CaseStudies)
    })
  },

  resourceLibrary: () => {
    if (!document.getElementById('eversight-resource-library')) {
      return false;
    }

    new Vue({
      el: '#eversight-resource-library',
      render: h => h(ResourceLibrary)
    })
  },

  recentPosts: () => {
    let container = document.querySelector('#eversight-recent-posts')
    if (!container) {
      return false;
    }

    let excludedPost = container.getAttribute('data-exclude')

    new Vue({
      el: container,
      data: {
        perPage: 3,
        displayLoadMore: false,
        excludedPost: _.isNull(excludedPost) ? false : excludedPost
      },
      render: h => h(ResourceLibrary)
    })
  }
}

module.exports = setupVue
