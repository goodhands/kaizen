/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');

import Vuex from 'vuex'
import Axios from 'axios';

Vue.use(Vuex)
Vue.use(Axios)

const store = new Vuex.Store({
    state: {
        showImageModal: false,
        showSignUpModal: false,
        //we need to allow users to switch from sign-up to sign-in without loading
        showSignIn: false,
        showSignUp: true,
        userLoggedIn: true
    },

    mutations:{
        showImageModal(state) {
            state.showImageModal = true
        },

        closeImageModal(state){
            state.showImageModal = false
        },

        showSignUpModal(state){
            state.showSignUpModal = true
        },

        switchToSignIn(state){
            state.showSignIn = true
            state.showSignUp = false
        },

        switchToSignUp(state){
            state.showSignUp = true
            state.showSignIn = false
        }
    },

})

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-hero', require('./components/HomeHero.vue').default);
Vue.component('filter-section', require('./components/Filter.vue').default);
Vue.component('home-main-content', require('./components/HomeMainContent.vue').default);
Vue.component('image-card', require('./components/ImageCard.vue').default);
Vue.component('image-popup', require('./components/ImagePopup.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);
Vue.component('end-of-scroll', require('./components/EndOfScroll.vue').default);
Vue.component('in-app-auth', require('./components/InAppAuth.vue').default);
Vue.component('sign-in', require('./components/SignIn.vue').default);
Vue.component('sign-up', require('./components/SignUp.vue').default);
Vue.component('app-footer', require('./components/Footer.vue').default);
Vue.component('photo-single', require('./components/PhotoSingle.vue').default);
Vue.component('nav-control', require('./components/NavControl.vue').default);
Vue.component('upload-photo', require('./components/UploadPhoto.vue').default);
Vue.component('discover-content', require('./components/DiscoverContent.vue').default);
Vue.component('image-uploader', require('./components/ImageUploader.vue').default);
Vue.component('user-profile', require('./components/UserProfile.vue').default);

Vue.directive('overlay-bg', {
    inserted: function(el, binding){
        el.style.backGround = "linear-gradient(45deg, rgba(0,0,0,0.5), rgba(0,0,0,0.4), url(' "+binding.value+" ')";
    }
})
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store,
    methods: {
        signUpModal(){
            this.$store.commit('showSignUpModal')
            this.$store.commit('switchToSignUp')
        },

        signInModal(){
            this.$store.commit('showSignUpModal')
            this.$store.commit('switchToSignIn')
        }
    },
});
