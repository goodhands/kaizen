<template>
<div>
    <div class="image-item" v-for="(item, index) in this.data" :key="index">
        <a :href="'/photo/'+item.slug" @click="shotModal">
            <div class="item-display rounded" :style="{ 'background': 'linear-gradient(40deg, rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('+item.asset_url+')', 'backgroundPosition':'center','backgroundSize':'cover','backgroundRepeat':'no-repeat' }">
            </div>
        </a>
        <div class="item-meta">
            <div class="meta-description my-1">
                <a href="#">
                    <h2 class="leading-snug font-medium flex flex-row justify-between items-center">
                        <img src="images/user.jpg" class="h-5 rounded-full" />
                        &nbsp; {{ item.title }}
                    </h2>
                </a>
                <p class="text-light-dark leading-tight" title="2019-09-20 09:32am">{{item.created_at}}</p>
            </div>
            <div class="meta-stats">
                <a href="#" @click="favourite">
                    <div class="meta-item flex flex-row items-center leading-normal" title="12,500 likes">
                        <img src="images/favorite-line.svg" class="h-3" alt="">
                        <p class="text-black font-medium">&nbsp;320k</p>
                    </div>
                </a>
                <div class="meta-one flex flex-row items-center leading-normal" title="488,000 views">
                    <img src="images/view.svg" class="h-3" alt="">
                    <p class="text-black font-medium">&nbsp;20,930</p>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import Axios from 'axios'
// import mome
export default {
    data() {
        return {
            image: "images/photo-1493414307931-f6f5861f5029.jpg",
            data: [],
        }
    },

    mounted() {
        Axios.get('http://127.0.0.1:8000/schowalter.lawrence/photos').then(response => (this.data = response.data));
    },

    methods: {
        shotModal(event){
            event.preventDefault();         
            this.$store.commit('showImageModal')
            document.body.style.overflow = "hidden";
        },

        favourite(event){
            event.preventDefault();
        }
    },
}
</script>