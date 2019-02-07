<script>
    export default {
        props: ['attributes'],
        data() {
            return {
                editing: false, 
                body: this.attributes.body
            };
        },

        methods: {
            update(){
                axios.patch('/review/' + this.attributes.id, {
                    body : this.body
                });

                this.editing = false;

                flash('نقد شما به روز رسانی شد')
            }
        }
    }
</script>