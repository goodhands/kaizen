<template>
    <div class="overflow-x-hidden overflow-scroll overflow-y-scroll flex items-center justify-center image-popup fixed inset-0 h-screen w-screen bg-fade-black py-12">
        <div class="main-content m-auto w-5/12 bg-white h-auto rounded">
            <slot name="head"></slot>
            <slot name="main"></slot>
            <slot name="footer"></slot>
        </div>
        <span @click="closeModal" class="inset-0 text-white text-2xl text-lowercase cursor-pointer">X</span>        
    </div>
</template>

<script>
export default {
    methods: {
        closeModal (){
            this.$store.commit('closeImage')
            document.body.style.overflow = "scroll";
            document.body.style.overflowX = "hidden";
        },
    },
}
</script>