<template>
  <div>
    <div class="comment-section border-bottom mt-2 rtl">
      <div class="d-flex  w-100 text-right">
        <div class="p-2 order-1 bd-highlight align-self-center">
          <img
            src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png"
            class="commenter-image rounded-circle"
            alt
          >
        </div>
        <div class="p-2 flex-fill order-2 bd-highlight mt-2">
          <div class="d-flex bd-highlight  pb-3">
            <div class="text-daneh font-weight-bold ml-auto"></div>

            <div
              class="flex-shrink-1 bd-highlight text-muted"
            >{{ created_at | moment("dddd, Do MMMM") }}</div>
          </div>
          <p class="text-justify" v-text="data.body"></p>
          <div class="review-feedback text-left">
            <favorite :data="data" v-if="signedIn"></favorite>



          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Favorite from "./FavoriteComponent.vue";

export default {
  props: ["data"],

  components: { Favorite },

  data() {
    return {
      editing: false,
      body: this.data.body,
      review_id: this.data.review_id,
      created_at: this.data.created_at
    };
  },

  computed: {
    signedIn() {
      return window.Laravel.signedIn;
    }
  },

  methods: {
    update() {
      axios.patch("/reply/" + this.data.id, {
        body: this.body
      });

      this.editing = false;

      flash("نقد شما به روز رسانی شد");
    }
  }
};
</script>