<template>
  <button type="submit" class="btn btn-default" @click="toggle">
    <a class="text-muted" href=""> <span v-text="favoritesCount"></span> <i class="fa fa-heart"></i></a>
  </button>
</template>


<script>
  export default {
    props: ['reply'],

    data() {
      return {
        favoritesCount: 10
      }
    },

    methods: {
      toggle() {
        if (this.isFavorited) {
          axios.delete('reviews/' + this.reply.id +'/favorites')
        }
        else {
          axios.delete('reviews/' + this.reply.id +'/favorites')
        }
      }
    }
  }
</script>


<style>

</style>
