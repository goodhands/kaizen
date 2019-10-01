<template>
    <div class="comments w-7/12 mr-4">
        <h2 class="font-medium">Comments ({{this.comments.length}})</h2>
        <div class="comment-textbox flex flex-col mb-4">
            <textarea name="comment" id="" cols="30" v-model="commentTyped" rows="10" class="text"></textarea>
            <button class="btn primary" @click="addComment">Comment</button>
        </div>
        <pulse-loader v-if="!this.commentLoaded"></pulse-loader>
        <p v-if="this.errors != ''">
            {{this.errors}}
        </p>
        <div class="comment-item" v-for="comment in this.comments" :key="comment.id">
            <div class="w-full flex flex-row items-center">
                <div class="w-1/12">
                    <img :src="comment.commentator.avatar" alt="" class="rounded-full h-auto w-auto">
                </div>
                <div class="flex flex-col mx-2 w-11/12">
                    <a :href=" '/'+comment.commentator.username">
                        <h2 class="leading-normal font-medium text-1xl">{{ comment.commentator.firstname + ' ' + comment.commentator.lastname }}</h2>
                    </a>
                    <p class="leading-none text-gray-500 text-sm">{{comment.created_at}}</p>
                </div>
            </div>
            <div class="w-full flex flex-row">
                <div class="w-1/12"></div>
                <div class="w-11/12 m-2">
                    <p class="leading-snug text-sm">
                        {{comment.comment}}
                    </p>
                    <div class="comment-links flex flex-row justify-between">
                        <a href="#" class="text-sm text-grey">Like</a>
                        <a href="#" class="text-sm text-grey">Reply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import PulseLoader from 'vue-spinner/src/PulseLoader.vue';
export default {
    data() {
        return {
            comments: [],
            commentLoaded: false,
            errors: [],
            commentTyped: ''
        }
    },

    components:{
        PulseLoader
    },

    props:{
        post:{
            required: true,
        }
    },

    methods: {
        addComment: function(){

            if(this.commentTyped.length == 0 || this.commentTyped == ""){
                return null;
            }

            axios.post('/photo/'+this.post+'/comments', {
                comment: this.commentTyped
            }).then( (response) => (this.comments.unshift(response.data) ) ) //new comments come on top
            .catch( (error) => (this.errors = error))

            this.commentTyped = "";
        }
    },

    mounted() {
        axios.get('/photo/'+this.post+'/comments?page=1')
            .then( (response) => {
                this.commentLoaded = true;
                (this.comments = response.data) 
            })
            .catch( (error) => (this.errors = error))
    },
    
}
</script>