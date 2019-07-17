<template>
    <div class="bg-white-ter w-full p-primary flex flex-row justify-between flex-wrap">
        <image-card v-for="item in 24" :key="item"></image-card>
        <image-popup v-if="this.$store.state.showImagePop" :data="popimageData"></image-popup>
        <end-of-scroll v-if="!userLoggedIn"></end-of-scroll>
    </div>
</template>

<script>
import ImageCard from './ImageCard.vue'
import ImagePopup from './ImagePopup.vue'

export default {
    data() {
        return {
            popimageData: {
                name: 'Image for Festac 77',
                age: '23'
            },

            userLoggedIn: false
        }
    },
}
</script>