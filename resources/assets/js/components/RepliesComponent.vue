<template>
    <div>
        <div v-for="(reply, id) in items" :key="reply.id">
            <reply :data="reply"></reply>
        </div>

        <paginator></paginator>

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
                dataSet: false,
                endpoint: location.pathname + 'replies'
            }
        },

        created(){
            this.fetch();
        },

        methods: {
            fetch(){
                axios.get(this.url())
                    .then(this.refresh);
            },

            refresh({data}){
                console.log(data);
                this.dataSet = data;
                this.items = data.data;
            },
            url(){
                return location.pathname + 'replies';
            },

            }
        
    }
</script>
