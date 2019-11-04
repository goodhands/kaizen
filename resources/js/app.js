/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');
Vue.config.debug = true // turn on debugging mode

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
        userLoggedIn: true,
        username: "Olaegbe Samuel",
        shotShowedInModal: "http://127.0.0.1:8000/schowalter.lawrence"
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

require('./require/components');

Vue.directive('overlay-bg', {
    inserted: function(el, binding){
        el.style.backGround = "linear-gradient(45deg, rgba(0,0,0,0.5), rgba(0,0,0,0.4), url(' "+binding.value+" ')";
    }
});

/**
 * Import PulseLoader
 */
Vue.component('pulse-loader', require('vue-spinner/src/PulseLoader.vue'));
Vue.component('grid-loader', require('vue-spinner/src/GridLoader.vue'));

/*
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import axios from 'axios';

const app = new Vue({
    el: '#app',
    // mixins: [ require('./mixins/user') ],
    store,
    data() {
        return {
            user: [],
        }
    },

    created() {
        /**
         * Once Vue has been instantiated, we want to get the data of the logged in
         */
    },
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
