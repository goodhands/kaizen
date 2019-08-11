<template>
<div>
    <div class="filter-area px-20 border-b-1 border-faint-black">
        <div class="fitler-items sm:w-1/2 overflow-hidden h-full flex flex-row items-center justify-between">
            <a href="#" class="filter-link filter-link-active">All</a>
            <a href="#" class="filter-link">Culture</a>
            <a href="#" class="filter-link">Culture</a>
            <a href="#" class="filter-link">Culture</a>
            <a href="#" class="filter-link">Culture</a>
            <a href="#" class="filter-link">Culture</a>
        </div>

        <div class="filters-control sm:w-2/5 flex flex-row justify-end">
            <button class="btn-secondary flex items-center font-medium justify-between w-24" @click="filter = !filter">
                Filters
                <img src="images/filter-results-button.svg" class="h-4" alt="">
            </button>
        </div>

        <div class="filters-control hidden sm:block sm:w-4/12 w-1/4 flex flex-row justify-end">
            <button class="btn-secondary">Filters</button>
        </div>
    </div>
    <transition name="slideDown">
        <div class="filter-area px-20" v-if="filter">
            <div class="fitler-items w-1/2 h-full flex flex-row items-center justify-between">
                <a href="#" class="filter-link filter-link-active">All</a>
                <a href="#" class="filter-link">Culture</a>
                <a href="#" class="filter-link">Culture</a>
                <a href="#" class="filter-link">Culture</a>
                <a href="#" class="filter-link">Culture</a>
                <a href="#" class="filter-link">Culture</a>
            </div>

            <div class="filters-control w-1/4 flex flex-row justify-end">
                <button class="btn-secondary flex items-center font-medium justify-between w-24">
                    Filters
                    <img src="images/filter-results-button.svg" class="h-4" alt="">
                </button>
            </div>

            <div class="filters-control w-1/4 flex flex-row justify-end">
                <button class="btn-secondary">Filters</button>
            </div>
        </div>
    </transition>
</div>

    
</template>

<script>
export default {
    data() {
        return {
            filter: false
        }
    },
}
</script>