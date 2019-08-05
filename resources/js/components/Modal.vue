<template>
    <div @click="closeModal" class="overflow-x-hidden overflow-scroll z-index-9 overflow-y-scroll flex items-center justify-center image-popup fixed inset-0 h-screen w-screen bg-fade-black py-12">
        <div class="main-content m-auto w-5/12 bg-white h-auto rounded" :style="{'padding' : extraPad ? '30px' : '0px'}">
            <slot name="head"></slot>
            <slot name="main"></slot>
            <slot name="footer"></slot>
        </div>
        <slot></slot>
    </div>
</template>

<script>
/**
 * This component provides a close method to close the modal Out-of-the-box
 * I made this change on the testing branch
 */
export default {
    props:{
        extraPad: Boolean
    },

    methods: {
        closeModal (){
            this.$store.commit('closeImageModal')
            document.body.style.overflow = "scroll";
            document.body.style.overflowX = "hidden";
        },
    },
}
</script>