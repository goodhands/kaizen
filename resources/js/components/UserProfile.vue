<template>
    <div class="">
        <div class="h-hero relative flex flex-col items-center">
            <div class="talents-wall h-full w-full overflow-hidden flex flex-col items-center justify-center" :style="{
                    'background': 'linear-gradient(90deg, #AEFFAC, transparent), url(http://127.0.0.1:8000/images/user.jpg)',
                    'backgroundPosition': 'center',
                }">
            </div>
            <div class="user-avatar">
                <img src="http://127.0.0.1:8000/images/user.jpg" alt="">
            </div>
        </div>
        <div class="p-primary bg-white-ter">
            <div class="flex flex-row">
                <div class="w-3/12"></div>
                <div class="w-1/12"></div>
                <div class="w-8/12 flex flex-row flex-wrap justify-between">
                    <image-card v-for="item in 24" :key="item" class="w-4/12"></image-card>
                    <image-popup v-if="this.$store.state.showImageModal" :modal="true" :data="popimageData"></image-popup>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ImageCard from './ImageCard.vue'

export default {
    components:{
        ImageCard
    }
}
</script>