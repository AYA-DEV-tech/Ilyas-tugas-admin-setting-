const app = Vue.createApp({
    data() {
        return {
            page: 'dashboard',
            nonActive: true
        }
    },methods: {
        toggle(){
            this.nonActive = !this.nonActive
        }
    },
    computed: {
        gantiPage(baru, event) {
            event.preventDefault()
            this.page = baru
        },
    }
});
console.log('haii');
app.mount("#app")