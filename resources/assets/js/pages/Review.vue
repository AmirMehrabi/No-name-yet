<script>
import Replies from '../components/RepliesComponent.vue';
import NewReply from '../components/NewReplyComponent.vue';
export default {
    
    props: ['review_id'],
    components: { Replies, NewReply },
  data() {
      return {
        review: this.review_id
      }
    
  },
    mounted() {
    this.$root.$emit('review_id', this.review_id);
  }

}
</script>
