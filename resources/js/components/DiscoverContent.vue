<template>
    <div>
        <div class="w-full h-hero talents-area">
            <div class="talents-wall h-full w-full overflow-hidden flex flex-col items-center justify-center" :style="{
                'background': 'linear-gradient(90deg, #AEFFAC, transparent), url(http://127.0.0.1:8000/images/user.jpg)',
                'backgroundPosition': 'center',
            }">
                <!-- <img src="http://127.0.0.1:8000/images/user.jpg" alt="" v-for="item in 20" :key="item"> -->
                <h2 class="text-4xl font-bold text-white">Discover top talents in Photography on Pixel</h2>
                <div class="discover-filter-area">
                    <select name="location" id="">
                        <option value="1">Lagos</option>
                    </select>
                </div>
            </div>
        </div>
        <filter-section></filter-section>
        <div class="py-10 px-primary bg-white-ter">
            <div class="talent-control flex flex-row items-center justify-center mb-5">
                <a href="#" class="text-sm font-medium text-grey m-2">Trending</a>
                <a href="#" class="text-sm font-medium text-grey m-2">Following</a>
                <a href="#" class="text-sm font-medium text-grey m-2">Followers</a>
            </div>
            <div class="talent-container w-full h-auto border-t-1 border-b-1 border-grey flex flex-row">
                <div class="w-4/12 flex flex-row items-center justify-center">
                    <div class="t-image w-4/12 flex flex-col items-center">
                        <a href="#" class="block rounded-full h-32 w-32" 
                        :style="{
                            'background': 'url(http://127.0.0.1:8000/images/user.jpg)',
                            'backgroundPosition':'center',
                            'backgroundSize': 'contain'
                        }"></a>
                        <span class="dash"></span>
                        <div class="follow-talent flex flex-row justify-between">
                            <a href="#" class="btn-primary h-6 text-xs font-medium">Follow +</a>
                        </div>
                    </div>
                    <div class="t-image w-7/12 flex flex-col mx-3">
                        <h2 class="t-name text-xl font-bold font-primary leading-tight">
                            <a href="#">
                                Ifelice Photography
                            </a>
                        </h2>
                        <p class="text-grey leading-tight text-xs">Lagos, Nigeria * <span title="Popular category: Animal life">Animal Life</span></p>
                        <p class="text-black font-primary text-sm leading-tight mt-2">
                            Lorem ipsum dolor set amin but you know we are not here to joke right? I thought so....
                        </p>
                        <span class="dash"></span>
                        <div class="stats flex flex-row justify-between">
                            <span class="font-medium text-sm leading-tight flex flex-row" v-for="item in 3" :key="item">
                                <img src="http://127.0.0.1:8000/images/favorite-line.svg" class="h-4" alt=""> &nbsp;&nbsp; 2,030
                            </span> 
                        </div>
                        <span class="dash"></span>
                         <div class="tags-talent flex flex-row justify-start flex-wrap">
                            <a href="#" class="text-grey text-sm mr-2" v-for="items in 6" :key="items">#dslr</a>
                        </div>
                    </div>
                </div>
                <div class="w-8/12 flex flex-row justify-between items-center" :style="{'margin' : '10px auto'}">
                    <image-card :style="{ 'width' : '32%', 'margin-bottom': '0' }"></image-card>
                    <image-card :style="{ 'width' : '32%', 'margin-bottom': '0' }"></image-card>
                    <image-card :style="{ 'width' : '32%', 'margin-bottom': '0' }"></image-card>
                </div>
            </div>
            <div class="talent-container w-full h-auto border-b-1 border-grey flex flex-row">
                <div class="w-4/12 flex flex-row items-center justify-center">
                    <div class="t-image w-4/12 flex flex-col items-center">
                        <a href="#" class="block rounded-full h-32 w-32" 
                        :style="{
                            'background': 'url(http://127.0.0.1:8000/images/user.jpg)',
                            'backgroundPosition':'center',
                            'backgroundSize': 'contain'
                        }"></a>
                        <span class="dash"></span>
                        <div class="follow-talent flex flex-row justify-between">
                            <a href="#" class="btn-primary h-6 text-xs font-medium">Follow +</a>
                        </div>
                    </div>
                    <div class="t-image w-7/12 flex flex-col mx-3">
                        <h2 class="t-name text-xl font-bold font-primary leading-tight">
                            <a href="#">
                                Ifelice Photography
                            </a>
                        </h2>
                        <p class="text-grey leading-tight text-xs">Lagos, Nigeria * <span title="Popular category: Animal life">Animal Life</span></p>
                        <p class="text-black font-primary text-sm leading-tight mt-2">
                            Lorem ipsum dolor set amin but you know we are not here to joke right? I thought so....
                        </p>
                        <span class="dash"></span>
                        <div class="stats flex flex-row justify-between">
                            <span class="font-medium text-sm leading-tight flex flex-row" v-for="item in 3" :key="item">
                                <img src="http://127.0.0.1:8000/images/favorite-line.svg" class="h-4" alt=""> &nbsp;&nbsp; 2,030
                            </span> 
                        </div>
                        <span class="dash"></span>
                         <div class="tags-talent flex flex-row justify-start flex-wrap">
                            <a href="#" class="text-grey text-sm mr-2" v-for="items in 6" :key="items">#dslr</a>
                        </div>
                    </div>
                </div>
                <div class="w-8/12 flex flex-row justify-between items-center" :style="{'margin' : '10px auto'}">
                    <image-card :style="{ 'width' : '32%', 'margin-bottom': '0' }" v-for="item in 3" :key="item"></image-card>
                    <image-popup v-if="this.$store.state.showImageModal" :modal="true" :data="popimageData"></image-popup>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ImageCard from './ImageCard.vue'
import Filter from './Filter.vue'
import ImagePopUp from './ImagePopup.vue'

export default {
    components:{
        ImageCard,
        Filter,
        ImagePopUp
    },

    data() {
        return {
            popimageData: {
                'name' : 'Samuel'
            }
        }
    },
}
</script>