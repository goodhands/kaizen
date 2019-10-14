module.exports = {
    mounted() {
        axios.get('/ajax/user/current').then(response => this.user = response.data).catch(error => this.user = error.data);
    },
}