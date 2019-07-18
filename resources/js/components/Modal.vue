<template>
    <div class="overflow-x-hidden overflow-scroll overflow-y-scroll flex items-center justify-center image-popup fixed inset-0 h-screen w-screen bg-fade-black py-12">
        <div class="main-content m-auto w-5/12 bg-white h-auto rounded" :style="{'padding' : extraPad ? '30px' : '0px'}">
            <slot name="head"></slot>
            <slot name="main"></slot>
            <slot name="footer"></slot>
        </div>
        <slot></slot>
    </div>
</template>

<script>
export default {
    props:{
        extraPad: Boolean
    }
}
</script>