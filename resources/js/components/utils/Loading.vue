<template>
    <div class="flex w-full flex-col items-center">
        <slot class="text-black text-lg"></slot>
        <pulse-loader></pulse-loader>
    </div>
</template>

<script>
import PulseLoader from 'vue-spinner/src/PulseLoader.vue';

export default {
    components:{
        PulseLoader
    }
}
</script>