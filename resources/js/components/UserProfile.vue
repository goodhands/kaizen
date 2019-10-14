<template>
    <div class="">
        <div class="h-hero relative flex flex-col items-center">
            <div class="talents-wall h-hero w-full overflow-hidden flex flex-col items-center justify-center" :style="{
                    'background': 'linear-gradient(0deg, #AEFFAC, transparent), url(http://127.0.0.1:8000/images/user.jpg)',
                    'backgroundPosition': 'center',
                }">
            </div>
            <div class="w-full h-6 bg-white relative user-profile-subhead flex flex-row justify-center items-center">
                <div class="user-avatar-area flex flex-row justify-between items-center">
                    <img src="http://127.0.0.1:8000/images/user.jpg" alt="">
                    <div class="flex flex-col ml-4">
                        <h2 class="text-black text-2xl font-bold leading-tight">Olaegbe Samuel <span class="pro-badge"><a href="#" title="Learn more">PRO</a></span></h2>
                        <p class="text-black leading-tight text-sm">Lifestyle Photographer</p>
                    </div>
                </div>
                <div class="user-follow-stats flex flex-row justify-between w-1/4">
                    <a href="#" class="hover:text-black text-grey font-medium">Following 789</a>
                    <a href="#" class="hover:text-black text-grey font-medium">Followers 189k</a>
                    <a href="#" class="hover:text-black text-grey font-medium">Projects 189</a>
                </div>
                <div class="follow absolute profile-follow-btn">
                    <a href="#" class="btn-primary">Follow</a>
                </div>
            </div>
        </div>
        <div class="p-primary bg-white-ter relative">
            <div class="flex flex-row">
                <div class="profile-sidebar">
                     <div class="bio-item">
                         <p class="text-grey text-sm">About</p>
                         <h2 class="text-black-dark leading-snug font-primary text-center text-sm h-auto font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam eos magnam eum delectus mollitia fugiat facere voluptates tenetur, nihil aliquid soluta deserunt, rem illum enim amet! Dignissimos, qui. Nesciunt, repellendus!</h2>
                    </div>
                    <span class="dash"></span>
                    <div class="bio-item">
                         <p class="text-grey text-sm">Skills</p>
                         <div class="skills flex flex-row flex-wrap justify-between">
                             <a href="#" class="skill-item">Portrait shoot</a>
                             <a href="#" class="skill-item">Mug shot</a>
                             <a href="#" class="skill-item">Child photography</a>
                             <a href="#" class="skill-item">Slow mo</a>
                             <a href="#" class="skill-item">Nikon</a>
                             <a href="#" class="skill-item">Night Photography</a>
                             <a href="#" class="skill-item">Adobe Lightroom</a>
                         </div>
                    </div>
                    <span class="dash"></span>
                    <div class="bio-item">
                         <p class="text-grey text-sm">Connect</p>
                         <div class="skills flex flex-col w-full">
                             <a href="#" class="connect-item flex flex-row items-center hover:text-primary" v-for="items in 4" :key="items">
                                 <img src="http://127.0.0.1:8000/images/favorite-line.svg" class="hover:border-primary border-1 rounded border-grey px-1 py-1 h-6 w-6 mr-4" alt="">
                                 Facebook
                             </a>
                         </div>
                    </div>
                </div>
                <div class="w-9/12 flex flex-row flex-wrap justify-between">
                    <image-card v-for="item in 24" :key="item" :style="{'width':'32%'}"></image-card>
                    <image-popup v-if="this.$store.state.showImageModal" :modal="true" :data="popimageData"></image-popup>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ImageCard from './ImageCard.vue'
import FilterComponent from './FilterComponent.vue'

export default {
    components:{
        ImageCard,
        FilterComponent
    }
}
</script>