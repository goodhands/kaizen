<template>
    <div class="bg-white-ter w-full p-primary flex flex-row justify-between flex-wrap">
        <image-card v-for="item in 24" :key="item" class="xl:w-image-item sm:w-image-item-small"></image-card>
        <image-popup v-if="this.$store.state.showImageModal" :modal="true" :data="popimageData"></image-popup>
        <end-of-scroll v-if="!userLoggedIn"></end-of-scroll>
    </div>
</template>

<script>

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