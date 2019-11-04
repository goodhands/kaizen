<template>
    <div>
        <modal v-if="modal">
            <template v-slot:head>
                <div class="header p-5 flex flex-row justify-between">
                    <div class="w-8/12 flex flex-row items-center">
                        <img :src="item.user.avatar" alt="" class="rounded-full h-12 w-12">
                        <div class="flex flex-col mx-2">
                            <a :href="item.user.username">
                                <h2 class="leading-normal font-medium text-1xl">
                                    {{ item.user.firstname }} {{ item.user.lastname }}
                                </h2>
                            </a>
                            <p class="leading-none text-sm">
                                {{ item.user.profession }}
                            </p>
                            <p class="leading-none mt-1 text-light-grey text-xs">
                                Uploaded to <a :href="'/category/'+item.category.slug" class="hover:underline">{{item.category.label}}</a>
                            </p>
                        </div>
                    </div>
                    <div class="w-2/12 flex flex-row items-center justify-between content-center">
                        <button class="like-btn">
                            <img src="images/favorite.svg" class="h-4 w-4" alt="">
                        </button>
                        <button class="like-btn">
                            <img src="images/save.svg" class="h-4 w-4" alt="">
                        </button>
                    </div>
                </div>
            </template>
            <template v-slot:main>
                <div class="image-display-main">
                    <img :src="item.asset_url" :alt="item.asset_description | shorten">
                </div>
            </template>
            <template v-slot:footer>
                <div class="image-display-footer p-5">
                    <div class="sm-area flex flex-row justify-between">
                        <div class="sm-btn flex flex-row justify-between">
                            <h2 class="font-bold mb-2">
                                {{item.title}}
                            </h2>
                        </div>
                        <div class="sm-follow flex">
                            <a href="#" class="btn-primary font-medium">Follow {{item.user.username}}</a>
                        </div>
                    </div>
                    <span class="dash"></span>
                    <div class="description-area">
                        <p class="leading-snug text-sm">
                            {{ item.asset_description }}
                        </p>
                    </div>
                    <span class="dash block h-dash w-full bg-dark-grey my-2"></span>
                    <div class="meta-area my-3 flex flex-row justify-between">
                        <div class="meta-item w-4/12">
                            <h1 class="title text-sm text-subtitle">Settings</h1>
                            <div class="meta-item-child flex flex-row flex-wrap">
                                <a :href="'/aperture/2-8'">
                                    <div class="settings-item flex items-center w-full">
                                            <img src="images/diaphragm.png" class="h-4 w-4 mr-2" alt="Aperture">
                                            <strong class="text-italics mr-2">f</strong>  2/8
                                    </div>
                                </a>
                            </div>
                            <div class="meta-item-child flex flex-row flex-wrap">
                                <a :href="'/aperture/2-6'">
                                    <div class="settings-item flex items-center w-full">
                                            <img src="images/diaphragm.png" class="h-4 w-4 mr-2" alt="Aperture">
                                            <strong class="text-italics mr-2">ISO</strong>  8000
                                    </div>
                                </a>
                            </div>
                            <div class="meta-item-child flex flex-row flex-wrap">
                                <a :href="'/aperture/2-6'">
                                    <div class="settings-item flex items-center w-full">
                                            <img src="images/diaphragm.png" class="h-4 w-4 mr-2" alt="Aperture">
                                            <strong class="text-italics mr-2">Shutter</strong>  1/4000th
                                    </div>
                                </a>
                            </div>
                            <div class="meta-item-child flex flex-row flex-wrap">
                                <a :href="'/aperture/2-6'">
                                    <div class="settings-item flex items-center w-full">
                                            <img src="images/diaphragm.png" class="h-4 w-4 mr-2" alt="Aperture">
                                            <strong class="text-italics mr-2">Lens</strong>  300mm
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="meta-item w-4/12">
                            <h1 class="title text-sm text-subtitle">Tooling</h1>
                            <div class="meta-item-child flex flex-row flex-wrap">
                                <a href="#">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Adobe_Photoshop_Express_logo.svg/1024px-Adobe_Photoshop_Express_logo.svg.png" alt="" class="h-4 w-4"> Adobe Photoshop
                                </a>
                            </div>
                        </div>
                        <div class="meta-item w-4/12">
                            <h1 class="title text-sm text-subtitle">Extras</h1>
                            <div class="meta-item-child flex flex-row flex-wrap justify-between">
                                <a href="#" class="color block bg-black h-3 w-6 rounded hover:h-3 hover:2-8" v-for="items in 3" :key="items"></a>
                            </div>
                        </div>
                    </div>
                    <span class="dash block h-dash w-full bg-dark-grey my-5"></span>

                    <div class="image-meta flex flex-row">
                        <Comments :post="item.slug"/>
                        <div class="meta-item flex flex-col w-5/12">
                            <div class="flex flex-col">
                                <a href="#" class="font-medium w-full flex items-center text-center" v-for="items in 2" :key="items">
                                    <img src="images/favorite.svg" class="h-3 w-3 mr-2" alt="">
                                    <p>12,000 likes</p>
                                </a>
                                <div class="tags-list">
                                    <a :href="'/tags/'+tag.slug" class="tag" v-for="tag in item.tags" :key="tag.id">{{tag.label}}</a>
                                </div>
                                <div class="similar-images">
                                    <h2 class="font-medium">
                                        <a :href="item.user.username">
                                            Also by {{ "@"+item.user.username }}
                                        </a>
                                    </h2>                                    
                                    <similar-image-card :user="item.user.id" :current_photo="item.slug"></similar-image-card>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </template>
            <span @click="closeModal" class="close-btn">X</span>        
        </modal>
    </div>
</template>

<script>
import ImageCard from './ImageCard.vue'
import Comments from './Comments.vue'
import SimilarImage from './SimilarImageCard.vue'
import Axios from 'axios'

export default {
    data() {
        return {
            item: []
        }
    },

    filters: {
        tags(tagArray){
            // tagArray.map();
        }
    },
    
    components:{
        SimilarImage,
        Comments
    },

    methods: {
        closeModal (){
            this.$store.commit('closeImageModal')
            document.body.style.overflow = "scroll";
            document.body.style.overflowX = "hidden";
        },
    },
    
    filters:{
        shorten(text){
            // return half the size of the normal text
            var size = text.length;
            var shortenBy = size / 2;
            return text.substring(0, 30);
        }
    },

    props:{
        data: String,
        modal: Boolean
    },

    mounted() {
       Axios.get(this.data, {
            params: {
                json: 'true'
            }
        }).then(response => (this.item = response.data.data));  
    },

}
</script>