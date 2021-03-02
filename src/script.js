let app = new Vue({
    el: '#app',
    data: {
        dischi:[]
    },
    mounted(){ 
        axios
        .get('server.php')
        .then (response => {
        this.dischi = response.data;
        });
        console.log(dischi);
    }
});
