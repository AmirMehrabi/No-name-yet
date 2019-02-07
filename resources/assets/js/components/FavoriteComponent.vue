<template>
  <button :class="classes" @click="toggle">
    <span><i class="fa fa-heart"></i></span>
    <span v-text="favoritesCount"></span> 
  </button>
</template>


<script>
  export default {
    props: ['review'],

    data() {
      return {
        favoritesCount: this.review.favoritesCount,
        isFavorited: this.review.isFavorited
      }
    },

    computed: {
      classes() {
        return ['btn btn-sm', this.isFavorited ? 'btn-danger' : 'btn-light text-muted']; 
      } 
    },

    methods: {
      toggle() {
        if (this.isFavorited) {
          axios.delete('/reviews/' + this.review.id +'/favorites')
          this.isFavorited = false;
          this.favoritesCount--;
        }
        else {
          axios.post('/reviews/' + this.review.id +'/favorites')

          this.isFavorited = true;
          this.favoritesCount++;
        }
      }
    }
  }
</script>


<style>

</style>
