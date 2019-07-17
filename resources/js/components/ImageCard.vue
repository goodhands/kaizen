<template>
    <div class="image-item xl:w-image-item sm:w-image-item-small">
        <a href="/photo/hello-123" @click="shotModal">
            <div class="item-display rounded" :style="{ 'background': 'linear-gradient(40deg, rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('+image+')', 'backgroundPosition':'center','backgroundSize':'cover','backgroundRepeat':'no-repeat' }">
            </div>
        </a>
        <div class="item-meta">
            <div class="meta-description my-1">
                <a href="#">
                    <h2 class="leading-snug font-medium flex flex-row justify-between items-center">
                        <img src="images/user.jpg" class="h-5 rounded-full" />
                        &nbsp;Rapsody Reality
                    </h2>
                </a>
                <p class="text-light-dark leading-tight" title="2019-09-20 09:32am">about an hour ago</p>
            </div>
            <div class="meta-stats">
                <a href="#">
                    <div class="meta-item flex flex-row items-center leading-normal" title="12,500 likes">
                        <img src="images/favorite-line.svg" class="h-3" alt="">
                        <p class="text-black font-medium">&nbsp;12,500</p>
                    </div>
                </a>
                <div class="meta-one flex flex-row items-center leading-normal" title="488,000 views">
                    <img src="images/view.svg" class="h-3" alt="">
                    <p class="text-black font-medium">&nbsp;448k</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            image: "images/photo-1493414307931-f6f5861f5029.jpg",
        }
    },

    methods: {
        shotModal(event){
            event.preventDefault();         
            this.$store.commit('viewImage')
            this.$store.state.showImagePop ? document.body.style.overflow = "hidden" : document.body.style.overflow = "scroll";
        }
    },
}
</script>