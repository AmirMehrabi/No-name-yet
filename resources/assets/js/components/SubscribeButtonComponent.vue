<template>
  <button :class="classes" @click="subscribe" v-text="subscriptionState"></button>
</template>

<script>
export default {
  props: ["active"],
      data: function () {
        return {
            mutableActive: JSON.parse(this.active),
            subscriptionState: ''
        }
    },
  created() {
        this.subscriptionState = (this.mutableActive ?  'حذف اشتراک' : 'اشتراک در نقد');
  },

  computed: {
    classes() {
      return ["btn btn-block mt-1", this.mutableActive ? "btn-primary" : "btn-secondary"];
    }
  },
  methods: {
    subscribe() {
      axios[
          (this.mutableActive ? 'delete' : 'post')
      ](location.pathname + "subscriptions");
        this.mutableActive = ! this.mutableActive;
        this.subscriptionState = (this.mutableActive ?  'حذف اشتراک' : 'اشتراک در نقد');
        if(this.mutableActive == true) {
            flash('شما در این نقد مشترک شدید');
        }else {
            flash('شما از این نقد سلب اشتراک کردید');
        }
    }
  }
};
</script>

