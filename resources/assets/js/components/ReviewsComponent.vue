<template>
    <div>

    </div>
</template>

<script>
import Review from './ReviewComponent.vue';
 
export default {
    props: ['data'],

    components: { Review },

    data() {
        return {
            items: this.data
        }
    }
}
</script>
