<template>
  <button :class="classes" @click="toggle">
    <span><i class="fa fa-heart"></i></span>
    <span v-text="favoritesCount"></span> 
  </button>
</template>


<script>
  export default {
    props: ['reply'],

    data() {
      return {
        favoritesCount: this.reply.favoritesCount,
        isFavorited: this.reply.isFavorited
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
          //axios.delete('/reply/' + this.reply.id +'/favorites')
          this.isFavorited = false;
          this.favoritesCount--;
        }
        else {
          axios.post('/reply/' + this.reply.id +'/favorites')
          this.isFavorited = true;
          this.favoritesCount++;
        }
      }
    }
  }
</script>


<style>

</style>
