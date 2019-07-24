<template>
    <div>
            <sign-up v-if="this.$store.state.showSignUp" :modal="modal"></sign-up>
            <sign-in v-if="this.$store.state.showSignIn" :modal="modal"></sign-in>
    </div>
</template>

<script>

import Modal from './Modal.vue'

export default {
    props:{
    //most of the props of this component are meant for its child components (signin & signup) and are meant to control their behaviour when accessed without the modal component
        modal: {
            type: Boolean,
            default: true
        }
    }
}
</script>