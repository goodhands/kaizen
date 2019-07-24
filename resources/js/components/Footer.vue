<template>
    <div class="bg-white h-300 border-t-1 border-faint-black">
        <div class="bg-beauty w-full h-16 px-primary" 
        :style="{'background': 'linear-gradient(150deg, rgb(174, 255, 172), transparent)'}">
            Logo here
        </div>
        <div class="flex flex-row justify-between p-primary ">
            <div class="footer-item flex flex-col" v-for="item in 4" :key="item">
                <h2 class="text-1xl font-medium">Resources</h2>
                <a href="#">About</a>
                <a href="#">Policies</a>
                <a href="#">Press</a>
                <a href="#">Payments</a>
                <a href="#">Hiring</a>
            </div>
        </div>
    </div>
</template>