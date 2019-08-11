<template>
    <div class="bg-white-ter w-full p-primary flex flex-row justify-between flex-wrap">
        <image-card :url="this.home"></image-card>
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

            userLoggedIn: false,

            home: "http://127.0.0.1:8000/api/photo/75y34b/home"
        }
    },
}
</script>