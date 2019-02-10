<template>
    <div>
        <div v-for="(reply, id) in items" :key="reply.id">
            <reply :data="reply"></reply>
        </div>

        <paginator :dataSet="dataSet" @updated="fetch"></paginator>

        <new-reply @created="add" ></new-reply>
    </div>
</template>


<script>
    import Reply from './ReplyComponent.vue';
    import NewReply from './NewReplyComponent.vue';
    import collection from '../mixins/collection';
    export default {
     props: [],

     components: { Reply, NewReply },
     
     mixins: [collection],

     data() {
         return {
                dataSet: false
            }
        },

        created(){
            this.fetch();
        },

        methods: {
            fetch(page){
                axios.get(this.url(page))
                    .then(this.refresh);
            },

            refresh({data}){
                console.log(data.data);
                this.dataSet = data;
                this.items = this.items.concat(data.data);
                console.log(this.items);
            },
            url(page = 1){
                return location.pathname + 'replies?page='+page;
            },

            }
        
    }
</script>
