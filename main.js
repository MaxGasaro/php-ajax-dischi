const app = new Vue({
    
    el: '#app',
    data: {
        dischi: [],
    },
    mounted() {

        axios.get('').then(response => {
            this.dischi = response.data
        });

    }
})