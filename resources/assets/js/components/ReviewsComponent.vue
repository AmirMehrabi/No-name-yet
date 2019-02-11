<template>
  <div>
    <div v-for="review in items" :key="review.id">
      
      <review :data="review"></review>
      
    </div>

    <!-- <paginator :dataSet="dataSet" @changed="fetch"></paginator> -->

    <!-- <new-review @created="add"></new-review> -->
  </div>
</template>

<script>
import Review from "./ReviewComponent.vue";
import collection from "../mixins/collection";


export default {
  props: ['bookid'],

   mixins: [collection],

  components: { Review },

  data() {
    return {
      items: [],
      dataSet: false
    };
  },
    created() {
    this.fetch();
    console.log(this.bookid);
  },

  methods: {
    fetch(page) {
      axios.get(this.url(page)).then(this.refresh);
    },

    refresh({ data }) {
      this.dataSet = data;
      this.items = this.items.concat(data.data);
    },
    url(page = 1) {
      return '/book/' + this.bookid + "/reviews?page=" + page;
    }
  }
};
</script>
