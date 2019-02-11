<template>
  <div>
    <div v-for="reply in items" :key="reply.id">
      <reply :data="reply"></reply>
      
    </div>

    <paginator :dataSet="dataSet" @changed="fetch"></paginator>

    <new-reply @created="add" :instanceid="instanceid"></new-reply>
  </div>
</template>


<script>
import Reply from "./ReplyComponent.vue";
import NewReply from "./NewReplyComponent.vue";
import collection from "../mixins/collection";
export default {
  props: ["propid"],

  components: { Reply, NewReply },

  mixins: [collection],

  data() {
    return {
      dataSet: false,
      instanceid: this.propid,
      items: []
    };
  },

  created() {
    this.fetch();
    
  },

  methods: {
    fetch(page) {
      axios.get(this.url(page)).then(this.refresh);
      console.log(this.propid);
    },

    refresh({ data }) {
      this.dataSet = data;
      
      this.items = this.items.concat(data.data);
      this.review_id = 1;
    },
    url(page = 1) {
      // return location + "replies?page=" + page;
      return '/review/' + this.propid + "/replies?page=" + page;
    }
  }
};
</script>
