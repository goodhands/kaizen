<template>
    <div>
        <div class="w-full h-hero talents-area">
                <div class="talents-wall h-full w-full overflow-hidden flex flex-col items-center justify-center" :style="{
                    'background': 'linear-gradient(90deg, #AEFFAC, transparent), url(http://127.0.0.1:8000/images/user.jpg)',
                    'backgroundPosition': 'center',
                }">
                    <!-- <img src="http://127.0.0.1:8000/images/user.jpg" alt="" v-for="item in 20" :key="item"> -->
                    <h2 class="text-4xl font-bold text-white">Take us on a journey of bliss.</h2>
                </div>
        </div>
        <div class="p-primary h-screen bg-white-ter">
            <image-uploader></image-uploader>
        </div>
    </div>
</template>

<script>
import ImageUploader from './ImageUploader.vue'

export default {
    components:{
        ImageUploader
    }
}
</script>