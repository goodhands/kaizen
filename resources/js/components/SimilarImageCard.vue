<template>
    <div class="flex flex-row flex-wrap justify-between w-full">
        <grid-loader v-if="!this.loaded"></grid-loader>
        <div class="small-image-item" v-for="item in this.item" :key="item.id">
            <a :href="'/photo/'+item.slug" @click="shotModal(item.slug)" :title="item.title + ' by ' + '@'+item.user.username">
                <div class="item-display rounded" :style="{ 'background': 'linear-gradient(40deg, rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('+item.asset_url+')', 'backgroundPosition':'center','backgroundSize':'cover','backgroundRepeat':'no-repeat' }">
                </div>
            </a>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import GridLoader from 'vue-spinner/src/GridLoader.vue';
export default {
    data() {
        return {
            item: [],
            loaded: false,
        }
    },

    components:{
        GridLoader
    },

    props:{
        user:{
            required: true
        },

        current_photo:{
            required: true
        }
    },

    mounted() { 
        axios.get('/api/similar?except='+this.current_photo+'&terms=user&termID='+this.user).then( (response) => {
            ( this.item = response.data) 
            this.loaded = true;
        });
    },
}
</script>