<template>
    <div>
        <div class="filter-area px-20 border-b-1 border-faint-black">
            <div class="fitler-items sm:w-1/2 overflow-hidden h-full flex flex-row items-center justify-between">
                <a v-for="category in categories" :key="category.id" :href="'/photo/'+category.slug" :class="isActive(category.slug) ? 'filter-link filter-link-active' : 'filter-link' ">{{category.label | ucfirst}}</a>
            </div>

            <div class="filters-control sm:w-2/5 flex flex-row justify-end">
                <button class="btn-secondary flex items-center font-medium justify-between w-24" @click="filter = !filter">
                    Filters
                    <img src="images/filter-results-button.svg" class="h-4" alt="">
                </button>
            </div>
        </div>
        
        <transition name="slideDown">
            <div class="filter-area px-20" v-if="filter">
                <div class="fitler-items w-full h-full flex flex-row items-center justify-between">
                    <ul class="flex items-center flex-row justify-around w-full">
                        <li class="relative w-1/12" v-for="setting in this.settings" :key="setting.id">
                            <a href="#" class="filter-child w-full flex items-center justify-center font-medium text-sm hover:bg-white-ter rounded">
                                {{setting.name}} 
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
                            </a>
                            <ul class="absolute w-full bg-white shadow rounded flex flex-col items-center" ref="setting.name">
                                <li class="w-full text-center flex" v-for="values in setting.values" :key="values"><a href="#" class="w-full font-medium text-sm hover:bg-primary">{{values+"+"}}</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    data() {
        return {
            filter: false,
            settings: [
                {
                    id : 1,
                    name : 'Apperture',
                    values: [
                        1, 3, 5, 6
                    ]
                },
                {
                    id : 2,
                    name : 'Shutter',
                    values: [
                        200, 500, 800
                    ]
                }
            ]
        }
    },

    props:{
        categories: {
            required: true
        }
    },

    mounted() {
        console.log(this.$refs);
    },

    filters:{
        ucfirst(string){
            return string.charAt(0).toUpperCase()+string.substring(1, string.length)
        }
    },

    methods: {
        isActive(slug){
            /**Checks if the category is selected */
            let uri = window.location.search.substring(1); 
            let params = new URLSearchParams(uri);
            return slug === params.get("cat");
        }
    },
}
</script>