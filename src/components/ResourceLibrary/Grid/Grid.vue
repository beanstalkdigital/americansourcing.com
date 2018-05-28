<template>
  <div class="container">
    <div class="eversight-resource-library__grid">
      <Card v-for="resource in resources" :resource="resource" />
    </div>
  </div>
</template>

<script>
import Card from "../Card/Card.vue"

export default {
  props: ["resources"],
  components: {
    Card
  }
}
</script>

<style></style>
