<template>
    <div>
        <div v-if="signedIn">
            <fieldset class="form-group text-right mt-4">
                <label for="exampleTextarea">نقد خود را بنویسید</label>
                <textarea v-model="body" class="form-control" id="exampleTextarea" rows="5"></textarea>
            </fieldset>
        
            <button type="submit" class="btn btn-primary" @click="addReply">ثبت نقد</button>
        </div>
        <div v-else>
            <p class="text-right text-muted py-3">برای مشارکت در این نقد لطفاً به سیستم وارد شوید</p>
        </div>

    </div>
</template>


<script>
export default {
    data() {
        return {
            body: '',
            review_id: this.review_id,
            endpoint: '/reply/'
        };
    },
  mounted() {
    this.$root.$on('review_id', this.getReviewId)
  },
          computed: {
            signedIn() {
                return window.Laravel.signedIn
            } 
        },

    methods: {
        getReviewId(objectParams){
            this.review_id = objectParams;
        },
        addReply(){
            axios.post(this.endpoint, {body: this.body, review_id: this.review_id})
            .then(({data}) => {
                this.body = '';
                flash('Your reply has been posted.');
                this.$emit('created', data);
            })
            .catch(function (error) {
            console.log(error);
  });
        }
    }
}
</script>
