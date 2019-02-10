<template>
  <button class="btn btn-block btn-info mt-1" @click="subscribe">اشتراک در نقد</button>
</template>

<script>
export default {
  methods: {
    subscribe() {
      axios
        .post(location.pathname + "subscriptions")
        .then(({ data }) => {
            console.log(data);
          flash("شما مشترک این نقد شدید");
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  }
};
</script>

