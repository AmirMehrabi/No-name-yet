<template>
  <button :class="classes" @click="toggle">
    <span>
      <i class="fa fa-heart"></i>
    </span>
    <span v-text="favoritesCount"></span>
  </button>
</template>


<script>
export default {
  props: ["data"],

  data() {
    return {
      favoritesCount: this.data.favoritesCount,
      isFavorited: this.data.isFavorited
    };
  },

  computed: {
    classes() {
      return [
        "btn btn-sm",
        this.isFavorited ? "btn-danger" : "btn-light text-muted"
      ];
    }
  },

  methods: {
    toggle() {
      if (this.isFavorited) {
        console.log(
          axios.delete(
            "/" + this.data.modelName + "/" + this.data.id + "/favorites"
          )
        );
        this.isFavorited = false;
        this.favoritesCount--;
      } else {
        axios.post(
          "/" + this.data.modelName + "/" + this.data.id + "/favorites"
        );

        this.isFavorited = true;
        this.favoritesCount++;
      }
    }
  }
};
</script>


<style>
</style>
