<template>
  <li class="nav-item nav-item-icon active pt-1 mx-2" v-if="notifications.length">
    <a class="nav-link" href="#" data-toggle="dropdown">
      <i class="far fa-bell"></i>
      <span class="badge badge-secondary text-white bg-daneh border-0">{{notifications.length}}</span>
    </a>
    <ul class="dropdown-menu ">
      <li v-for="notification in notifications">
        <a
          :href="'/review/' + notification.data.link"
          class=" dropdown-item text-right"
          v-text="notification.data.message"
          @click="markAsRead(notification)"
        ></a>
      </li>
    </ul>
  </li>
</template>

<script>
export default {
  data() {
    return {
      notifications: []
    };
  },

  created() {
    axios
      .get("/profiles/" + window.Laravel.user.id + "/notifications")
      .then(response => (this.notifications = response.data));
  },

  methods: {
    markAsRead(notification) {
      axios.delete(
        "/profiles/" +
          window.Laravel.user.id +
          "/notifications/" +
          notification.id
      );
    }
  }
};
</script>