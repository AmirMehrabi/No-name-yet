<template>
    <div>
    <!-- <ul class="pagination  mt-2" v-if="shouldPaginate">
    <li class="page-item">
      <a class="page-link" href="#" tabindex="-1" @click.prevent="page--">قبلی</a>
    </li>

    <li class="page-item" v-show="nextUrl">
      <a class="page-link" @click.prevent="page++">بعدی</a>
    </li>
  </ul> -->
  <button class="btn btn-block btn-primary"  v-show="nextUrl" @click.prevent="page++">بارگزاری نظرهای بیشتر</button>
    </div>
</template>


<script>
export default {
    props: ['dataSet'],
    data(){
        return {
            page: 1,
            prevUrl: false,
            nextUrl: false
        }
    },

    watch: {
        dataSet(){
            this.page = this.dataSet.current_page;
            this.prevUrl = this.dataSet.prev_page_url;
            this.nextUrl = this.dataSet.next_page_url;
        },

        page() {
            this.broadcast();
        }
        
    },

    computed: {
        shouldPaginate() {
            return !! this.prevUrl || !! this.nextUrl;
        }
    },

    methods: {
        broadcast() {
            this.$emit('updated', this.page);
        }
    }
}
</script>
