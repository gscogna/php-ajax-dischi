let app = new Vue({
    el: '#app',
    data: {
        dischi:[],
        tipi: ['All'],
        genereSelect: 'All'
    },
    mounted(){ 
        axios
        .get('server.php')
        .then (response => {
        this.dischi = response.data;
            this.dischi.forEach((element, i) => {
                if (!this.tipi.includes(element.genre)) {
                    this.tipi.push(element.genre);
                }
            });

        });
        console.log(dischi);
    }
});
