/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');

import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        showImagePop: false
    },

    mutations:{
        viewImage(state) {
            state.showImagePop = true
        },

        closeImage(state){
            state.showImagePop = false
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
    store
});
