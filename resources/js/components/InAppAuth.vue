<template>
    <modal>
        <sign-up v-if="this.$store.state.showSignUp"></sign-up>
        <sign-in v-if="this.$store.state.showSignIn"></sign-in>
    </modal>
</template>

<script>

import Modal from './Modal.vue'

export default {
    props:{
        modal: Boolean
    }
}
</script>