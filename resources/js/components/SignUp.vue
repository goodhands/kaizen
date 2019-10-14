<template>
    <div>
        <modal class="p-normal" :extraPad="true" v-if="modal">
            <template v-slot:head>
                <div class="header-col flex flex-col p-normal items-center pb-0">
                    <h2 class="text-2xl font-medium leading-normal">Sign up below</h2>
                    <h5 class="text-1xl text-dark-black leading-normal mb-5">Login below to access over 2 million professional photographers</h5>
                    <button class="btn-social w-full h-auto rounded bg-grey mb-2">Facebook</button>
                    <button class="btn-social w-full h-auto rounded bg-grey mb-2">Google</button>
                    <span class="dash"></span>
                </div>
            </template>
            <template v-slot:main>
                <div class="main-col has-form flex flex-col p-normal items-center pb-0 pt-0">
                    <div class="form-item w-full flex flex-col mb-3">
                        <label for="username" class="font-medium cursor-pointer">Username</label>
                        <input type="text" id="username" class="form-control">
                    </div>
                    <div class="form-item w-full flex flex-col mb-3">
                        <label for="email" class="font-medium cursor-pointer">Email</label>
                        <input type="email" id="email" class="form-control">
                    </div>
                    <div class="form-item w-full flex flex-col mb-3">
                        <label for="password" class="font-medium cursor-pointer">Password</label>
                        <input type="password" id="password" class="form-control">
                        <span class="text-darker-grey leading-normal text-sm">Passwords must contain at least eight characters, including at least 1 letter and 1 number.</span>
                        <div class="check-wrap flex flex-row justify-center mt-4">
                        <input type="checkbox" name="newsletter" id="newsletter" class="mr-2">
                        <label class="text-darker-grey cursor-pointer leading-tight text-sm" for="newsletter">Opt-in to receive occasional product updates, user research invitations, company announcements, and digests.</label>
                        </div>
                        <button class="btn-primary mt-5">Sign up</button>
                        <p class="text-sm text-darker-grey text-center mt-2">
                            Already have an account? <a href="#" class="text-primary" @click="signInModal">Sign In</a>
                        </p>
                        <p class="text-sm text-darker-grey text-center mt-2">
                            &dash; Esc. to close
                        </p>
                    </div>
                </div>
            </template>
            <template v-slot:footer></template>
        </modal>
        <div v-else>
            <div class="shadow-small-outline main-content p-8 m-auto w-5/12 bg-white h-auto rounded">
                <div class="header-col flex flex-col p-normal items-center pb-0">
                    <h2 class="text-2xl font-medium leading-normal">Sign up below</h2>
                    <h5 class="text-1xl text-dark-black leading-normal mb-5">Login below to access over 2 million professional photographers</h5>
                    <button class="btn-social w-full h-auto rounded bg-grey mb-2">Facebook</button>
                    <button class="btn-social w-full h-auto rounded bg-grey mb-2">Google</button>
                    <span class="dash"></span>
                </div>
                <div class="main-col has-form flex flex-col p-normal items-center pb-0">
                    <div class="form-item w-full flex flex-col mb-3">
                        <label for="username" class="font-medium cursor-pointer">Username</label>
                        <input type="text" id="username" class="form-control">
                    </div>
                    <div class="form-item w-full flex flex-col mb-3">
                        <label for="email" class="font-medium cursor-pointer">Email</label>
                        <input type="email" id="email" class="form-control">
                    </div>
                    <div class="form-item w-full flex flex-col mb-3">
                        <label for="password" class="font-medium cursor-pointer">Password</label>
                        <input type="password" id="password" class="form-control">
                        <span class="text-darker-grey leading-normal text-sm">Passwords must contain at least eight characters, including at least 1 letter and 1 number.</span>
                        <div class="check-wrap flex flex-row justify-center mt-4">
                        <input type="checkbox" name="newsletter" id="newsletter" class="mr-2">
                        <label class="text-darker-grey cursor-pointer leading-tight text-sm" for="newsletter">Opt-in to receive occasional product updates, user research invitations, company announcements, and digests.</label>
                        </div>
                        <button class="btn-primary mt-5">Sign up</button>
                        <p class="text-sm text-darker-grey text-center mt-2">
                            Already have an account? <a href="#" class="text-primary" @click="signInModal">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Modal from './Modal.vue'

export default {
    methods: {
        signInModal(event){
            event.preventDefault();
            this.$store.commit('switchToSignIn')
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