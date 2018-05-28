<template>
  <div class="eversight-resource-library__filters bg-lightGray">
    <div class="container">
      <div class="field_wrapper">
      <select v-model="orderBy" @change="filterChanged">
        <option value="" selected="selected">Sort By</option>
        <option value="date">Date</option>
        <option value="title">Title</option>
      </select>
      <select v-model="selectedCategory" @change="filterChanged">
        <option value="" selected="selected">Category</option>
        <option value="">All</option>
        <option
          v-for="cat in categories"
          :value="cat.id"
          v-html="cat.name" />
      </select>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["resources"],
  data() {
    return {
      orderBy: 'date',
      selectedCategory: '',
      categories: [],
      loaded: false
    }
  },

  beforeMount() {
    this.getCategories()
  },

  mounted() {
  },

  methods: {
    getCategories() {
      var self = this
      axios.get('/wp-json/wp/v2/categories', {
        params: {
          hide_empty: true
        }
      })
      .then(res => {
        self.categories = res.data
        self.loaded = true
      })
      .catch((error) => {
        console.log(error)
        self.loaded = true
      })
    },

    filterChanged(event) {
      return this.$emit('filtersChanged', [
        {
          type: 'categories',
          value: this.selectedCategory
        },
        {
          type: 'orderby',
          value: this.orderBy
        },
        {
          type: 'order',
          value: this.orderBy == 'title' ? 'asc' : 'desc'
        }
      ]);
    }
  }
}
</script>
