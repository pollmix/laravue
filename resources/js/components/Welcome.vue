<template>
  <div>
    <h2>Vue on Laravel</h2>
    <p>{{ title }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      msg: 'asd'
    }
  },
  props: ['title']
}
</script>

<style scoped>

</style>