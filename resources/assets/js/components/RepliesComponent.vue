<template>
    <div>
        <div v-for="(reply, id) in items" :key="reply.id">
            <reply :data="reply"></reply>
        </div>

        <button class="btn btn-block btn-primary" @click="paginateButton">نظرات بیشتر</button>

        <new-reply @created="add" ></new-reply>
    </div>
</template>


<script>
    import Reply from './ReplyComponent.vue';
    import NewReply from './NewReplyComponent.vue';
    export default {
     props: [],

     components: { Reply, NewReply },
     
     data() {
         return {
                items: this.data,
                moreMessages: [],
                moreMsgFetched: false
            }
        },

        methods: {
            fetch(){
                axios.get(this.url())
                    .then(this.refresh);
            },

            url(){
                return location.pathname + '/replies';
            },
            add(reply) {
                this.items.push(reply);
            }
            }
        
    }
</script>
