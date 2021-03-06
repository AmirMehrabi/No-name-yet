
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('flash-component', require('./components/FlashComponent.vue'));

Vue.component('book-template', require('./pages/Book.vue'));

Vue.component('review-template', require('./pages/Review.vue'));

Vue.component('paginator', require('./components/PaginationComponent.vue'));

Vue.component('user-notifications', require('./components/UserNotificationsComponent.vue'));

Vue.component('review', require('./components/ReviewComponent.vue'));

Vue.component('reviews', require('./components/ReviewsComponent.vue'));


Vue.component('reply', require('./components/ReplyComponent.vue'));

Vue.component('favorite', require('./components/FavoriteComponent.vue'));

Vue.component('favorite-reply', require('./components/FavoriteReplyComponent.vue'));


const app = new Vue({
    el: '#app'
});

