<template>
    <div class="nav-menu text-white flex justify-between content-center items-center w-1/6 h-full">
        <a href="/pro">Go Pro!</a>
        <div class="avatar-area-top relative w-12 h-full flex flex-col items-center justify-center hover:bg-primary" v-if="this.$store.state.userLoggedIn" @mouseleave="userHover = false" @mouseenter ="userHover = true">
            <a href="" class="h-10 w-10 bg-grey rounded-full block" :style="{'background': 'url('+image+')', 'backgroundPosition' : 'center', 'backgroundSize' : 'contain'}"></a>
            <div class="nav-user-control absolute bg-white" v-if="userHover">
                <h2 class="text-xl font-primary font-medium leading-snug">Hello Olaegbe,</h2>
                <span class="dash"></span>
                <div class="top-level-ctrls font-sm text-black flex justify-between flex-wrap flex-col items-center">
                    <a href="#">Update profile</a>
                    <a href="#">Change password</a>
                    <a href="#">Sign out</a>
                </div>
                <span class="dash"></span>
                <div class="top-level-ctrls font-sm text-black flex justify-evenly flex-wrap flex-row">
                    <a href="#">Update profile</a>
                    <a href="#">Change password</a>
                    <a href="#">Sign out</a>
                </div>
            </div>
        </div>
        <a href="/upload" v-if="this.$store.state.userLoggedIn" class="btn-primary">Upload</a>
        <a href="#" v-else @click="showSignUp" class="btn-primary">Login</a>
    </div>
</template>

<script>
export default {
    data() {
        return {
            userHover: false,
            image: "http://127.0.0.1:8000/images/user.jpg"
        }
    },
    methods: {
        showSignUp(){
            this.$store.commit('showSignUpModal')
            this.$store.commit('switchToSignIn')
        }
    },
}
</script>