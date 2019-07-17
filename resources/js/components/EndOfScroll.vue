<template>
    <!-- The purpose of this component is to display some logic at the end of the page for users who are not logged in -->
    <div class="rounded w-full my-10 flex flex-col items-center">
        <h2 class="title leading-normal text-center font-medium text-2xl font-primary">Explore Top Talents</h2>
        <h4 class="font-medium text-1xl">Sign up to explore over 2 million talents on Hotshot</h4>
        <p>
            Whether you are hiring or you are a Photographer looking to showcase your skill and get hired, 
            you have come to the right place. Explore teams.
        </p>
        <div class="flex flex-row w-8/12 md:w-2/12 lg:w-2/12 items-center justify-between mt-2">
            <button class="btn-primary font-medium" @click="signUp != true">I am hiring</button>
            <button class="btn-primary font-medium" @click="signUp != true">I am a creator</button>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>