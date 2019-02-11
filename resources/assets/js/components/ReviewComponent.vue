<template>
        <div class="review text-right my-2 w-100 mb-3 border-bottom pb-2">
            <div class="d-flex flex-row align-items-center">
                <div class="mr-auto py-2 bd-highlight">
                  {{ dataSet.created_at | moment("dddd, Do jMMMM") }}
                </div>
                <div class=" p-2 bd-highlight">
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                </div>
                <div class="py-2 bd-highlight order-2">
                  <img :src="dataSet.owner.avatar" class="review-profile-pic img-rounded img-fluid rounded-circle" />
                </div>

                <div class="p-2 bd-highlight order-1">
                  <p class="mb-0">
                    <a class="text-muted" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{owner}}</strong> </a>
                  </p>
                </div>

              </div>

              <div class="review-description text-justify">
                        
              <div v-if="editing">
                  <textarea class="form-control" name="" id="" cols="30" rows="10" v-model="body"></textarea>

                  <div class="text-left">
                      <button class="btn btn-sm btn-outline-primary" @click="update">به روز رسانی</button>
                      <button class="btn btn-sm btn-link" @click="editing = false">انصراف</button>
                  </div>
              </div>
              <div v-else v-text="body" class="text-right py-2">

                </div>
                </div>



              <div class="card-footer d-flex flex-row bd-highlight">
                  <div class=" bd-highlight mr-3">
                      <button type="submit" class="btn btn-sm text-muted" @click="editing=true">ویرایش</button>
                    </div>
                <div class=" bd-highlight mr-3">
                  <a class="btn btn-sm text-muted" data-toggle="collapse" :href="'#collapseComments-'+data.id" role="button" aria-expanded="false"> {{data.replies.length}} <i class="fa fa-reply"></i></a>

                </div>

                <div class=" bd-highlight">
                   <favorite :data="data"></favorite>


                </div>
              </div>

              <div class="collapse" :id="'collapseComments-'+data.id">
                <div class="card card-body text-right rtl text-dark">
                  {{data.id}}
                  <replies :data="data.replies" :propid="data.id"></replies>
                  <!-- <replies :data="dataSet.replies"></replies> -->
                </div>
              </div>
        </div>
</template>

<script>
import Favorite from "./FavoriteComponent.vue";
import NewReply from "./NewReplyComponent.vue";
import Replies from "./RepliesComponent.vue";


export default {
  props: ["data"],

  components: { Favorite, NewReply, Replies },

  data() {
    return {
      editing: false,
      body: this.data.body,
      replies: this.data.replies,
      owner: this.data.owner.name,
      repliesCount: this.data.length,
      dataSet: this.data
    };
  },

  created() {
    console.log(this.data.replies);
  },
  methods: {
    update() {
      axios.patch("/review/" + this.data.id, {
        body: this.body
      });

      this.editing = false;

      flash("نقد شما به روز رسانی شد");
    }
  }
};
</script>