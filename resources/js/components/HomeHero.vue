<template>
    <div>
        <header class="flex items-start justify-center flex-col px-primary w-full h-hero bg-black" :style="{'background': 'linear-gradient(45deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('+image+')', 'background-size':'cover','background-position':'center','background-repeat':'no-repeat'}">
            <div class="w-half">
                <h3 class="text-primary text-4xl font-bold font-primary leading-tight">Hire professional photographers</h3>
                <p class="leading-snug mb-4 text-2xl font-primary font-bold text-white">Discover the best in <span v-animate>Lifestyle photographers</span></p>
                <button class="btn-primary">Get started</button>
            </div>
            <div class="my-5 text-grey">
                <a href="" class="px-4 shiny-green h-6 block text-white leading-normal">Creator @colx</a>
                <span class="animate-dash dash"></span>
            </div>
        </header>
    </div>
</template>

<script>
export default {
    data() {
        return {
            image: "https://i.ytimg.com/vi/BEm8MzrdkJ0/maxresdefault.jpg"
        }
    },
}
</script>