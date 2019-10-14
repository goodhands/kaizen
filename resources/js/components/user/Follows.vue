<template>
    <div class="sm:w-full w-9/12 flex flex-row flex-wrap">
        <loading v-if="this.users.length == 0"></loading>
        <div class="flex justify-evenly sm:w-12 md:w-6/12 lg:w-4/12" v-for="user in this.users" :key="user">
            <div class="user-card" @mouseenter="showMeta(user.id)" @mouseleave="hideMeta(user.id)">
                <div class="card-header"></div>
                <a href="#" @click.prevent="follow(user.username)" class="follow-user-btn">+</a>
                <!---I want the Follow to slide out when the + button is hovered -->
                <div class="user-image" :style="{ 'backgroundImage' : 'url('+user.avatar+')' }">
                </div>
                <a :href="'/'+user.username">
                    <div class="user-details">
                        <h2 class="title">{{ user.firstname +' '+ user.lastname }}</h2>
                        <p class="subtitle">@{{user.username}}</p>
                    </div>
                </a>

                <transition name="custom-classes-transition" enter-active-class="animated fadeIn" leave-active-class="animated fadeOut">
                    <div class="user-works" v-if="userMeta === user.id">
                        <!-- <loading v-if="this.users.length == 0"></loading> -->
                        <div class="photo-card-preview-sm"  v-for="item in 4" :key="item">
                            <a :href=" '/photo/' + item.slug " class="flex w-full"></a>
                        </div>
                    </div>
                </transition>
            </div>
        </div>
    </div>
</template>

<script>
import Loading from '../utils/Loading';
import axios from 'axios';

export default {
    components:{
        Loading
    },

    props: ['userId', 'followType'],

    data() {
        return {
            users: [],
            userMeta: ''
        }
    },

    methods: {
        showMeta(id){
            this.userMeta = id;
        },

        hideMeta(id){
            this.userMeta = '';
        }

        
    },

    computed: {
        count(){
            return this.users.length;
        }
    },

    mounted() {
        axios.get('/ajax/users/'+this.userId+'/'+this.followType).then(response => {
            this.users = response.data
        })
    },
    
}
</script>