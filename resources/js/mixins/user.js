window.axios = require('axios');
module.exports = {

    mounted() {
        axios.get('/ajax/user/current').then(response => this.user = response.data).catch(error => this.user = error.data);
    },

    methods: {
        follow(user){
            axios.post('/'+user+'/follow').then(response => {
                alert("Followed!");
                this.followAction == 'Unfollow' ? 'Follow' : 'Unfollow';
            }).catch(error => console.log(error));
        }
    },
}