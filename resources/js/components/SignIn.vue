<template>
    <modal class="p-normal" :extraPad="true"  v-if="modal">
        <template v-slot:head>
            <div class="header-col flex flex-col p-normal items-center">
                <h2 class="text-2xl font-medium leading-normal">Sign up below</h2>
                <h5 class="text-1xl text-dark-black leading-normal mb-5">Login below to access over 2 million professional photographers</h5>
                <button class="btn-social w-full h-auto rounded bg-grey mb-2">Facebook</button>
                <button class="btn-social w-full h-auto rounded bg-grey mb-2">Google</button>
                <span class="dash"></span>
            </div>
        </template>
        <template v-slot:main>
            <div class="main-col has-form flex flex-col p-normal items-center">
                <div class="form-item w-full flex flex-col mb-3">
                    <label for="email" class="font-medium cursor-pointer">Email</label>
                    <input type="email" id="email" class="form-control">
                    <span class="error-text block text-sm text-red">{{emailError}}</span>
                </div>
                <div class="form-item w-full flex flex-col mb-3">
                    <label for="password" class="font-medium cursor-pointer">Password</label>
                    <input type="password" id="password" class="form-control">
    
                    <button class="btn-primary mt-5">Sign up</button>            
                </div>
                <p class="text-sm text-darker-grey text-center mt-2">
                    Don't have an account? <a href="#" class="text-primary" @click="signUpModal">Sign up</a>
                </p>
            </div>
        </template>
        <template v-slot:footer></template>
    </modal>    
     <div v-else>
        <div class="main-content p-8 m-auto w-5/12 bg-white h-auto rounded">
            <div class="header-col flex flex-col p-normal items-center">
                <h2 class="text-2xl font-medium leading-normal">Sign up below</h2>
                <h5 class="text-1xl text-dark-black leading-normal mb-5">Login below to access over 2 million professional photographers</h5>
                <button class="btn-social w-full h-auto rounded bg-grey mb-2">Facebook</button>
                <button class="btn-social w-full h-auto rounded bg-grey mb-2">Google</button>
                <span class="dash"></span>
            </div>
            <div class="main-col has-form flex flex-col p-normal items-center">
                <div class="form-item w-full flex flex-col mb-3">
                    <label for="email" class="font-medium cursor-pointer">Email</label>
                    <input type="email" id="email" class="form-control">
                    <span class="error-text block text-sm text-red">{{emailError}}</span>
                </div>
                <div class="form-item w-full flex flex-col mb-3">
                    <label for="password" class="font-medium cursor-pointer">Password</label>
                    <input type="password" id="password" class="form-control">
    
                    <button class="btn-primary mt-5">Sign up</button>            
                </div>
                <p class="text-sm text-darker-grey text-center mt-2">
                    Don't have an account? <a href="#" class="text-primary" @click="signUpModal">Sign up</a>
                </p>
            </div>
        </div>
     </div>
</template>


<script>
import Modal from './Modal.vue'

export default {
    data() {
        return {
            emailError: 'Email must contain the @ part'
        }
    },
    methods: {
        signUpModal(event){
            event.preventDefault();
            this.$store.commit('switchToSignUp')
        }
    },

    props:{
        modal: {
            type: Boolean,
            default: true
        }
    }
}
</script>