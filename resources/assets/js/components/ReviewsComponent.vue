<template>
    <div>
        <div v-for="review in items">
            <review :data="review"></review>
        </div>
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
