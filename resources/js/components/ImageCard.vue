<template>
    <div class="flex flex-row flex-wrap justify-between w-full">
        <loading v-if="this.data.length == 0 && this.error == '' ">
            <h2>Please wait, our servers are fetching your photos...</h2>
        </loading>
        <div class="image-item" v-for="(item, index) in this.data" :key="index" @mouseenter="showMeta(item.id)" @mouseleave="hideMeta(item.id)">
            <a :href="'/photo/'+item.slug" @click="shotModal(item.slug)">
                <div class="item-display" :style="{ 'background': 'linear-gradient(40deg, rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('+item.asset_url+')', 'backgroundPosition':'center','backgroundSize':'cover','backgroundRepeat':'no-repeat' }">
                </div>
            </a>
            <transition name="custom-classes-transition" enter-active-class="animated slideInUp" leave-active-class="animated slideOutDown">
                <div class="item-meta">
                    <div class="meta-description my-1">
                        <h2 class="leading-snug font-medium flex flex-row items-center">
                            {{ item.title | title }}
                        </h2>
                    </div>
                    <div class="meta-stats">
                        <a href="#" @click="favourite" class="">
                            <div class="meta-item flex flex-row items-center leading-normal" title="12,500 likes">
                                <heart-icon size="20" class="like-card"></heart-icon>
                                <p class="text-black font-medium like-count">&nbsp;320k</p>
                            </div>
                        </a>
                        <div class="meta-one flex flex-row items-center leading-normal" title="488,000 views">
                            <eye-icon size="20"></eye-icon>
                            <p class="text-black font-medium">&nbsp;20,930</p>
                        </div>
                    </div>
                </div>
            </transition>
        </div>
        <image-popup v-if="this.$store.state.showImageModal" :modal="true" :data="selectedShotUrl"></image-popup>
    </div>
</template>

<script>
import ImagePopUp from './ImagePopup.vue'
import HeartIcon from 'vue-feather-icons/icons/HeartIcon'
import EyeIcon from 'vue-feather-icons/icons/EyeIcon'
import moment from 'moment'
import Loading from './utils/Loading';
import axios from 'axios';
import Axios from 'axios';

export default {
    components:{
        Loading,
        ImagePopUp,
        HeartIcon,
        EyeIcon,
    },

    data() {
        return {
            data: [],
            selectedShot: "",
            meta: '',
            error: '',
        }
    },

    props: {
        url: String,
        //if data profile is true, we will fetch the data `url` from the browser url. else, we will make use of the url prop
        dataProfile: Boolean
    },

    computed:{
        imageData(){
            return this.dataProfile === true ? document.location.href+'/photos' : this.url;
        },

        selectedShotUrl(){
            return document.location.origin + '/photo/' + this.selectedShot
        }
    },

    mounted() {
        axios.get(this.imageData).then(response => {
            if(typeof response.data == 'object'){
                this.data = response.data
            }else{
                this.error = response.data
            }
        }).catch(error => (
            this.error = error.data
        ))
    },

    methods: {
        shotModal(item){
            event.preventDefault();         
            this.$store.commit('showImageModal')
            // document.body.style.overflow = "hidden";
            //stores the unique identifier for each image
            this.selectedShot = item;
        },

        favourite(event){
            event.preventDefault();
        },

        showMeta(id){
            this.meta = id;
        },

        hideMeta(id){
            this.meta = "";
        }
    },

    filters: {
        agoDate:function(value){
            return moment(value).calendar();
        },

        title(title){
            return title.length > 35 ? title.substr(0, 35)+'...' : title;
        }
    }
}
</script>