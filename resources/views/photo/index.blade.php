@extends('layouts.default')

@section('main_content')
    {{$photo}}
    <photo-single></photo-single>
    <div v-if="!modal" class="shadow-small-outline main-content m-auto w-8/12 bg-white h-auto rounded">
        <div class="header p-5 flex flex-row justify-between">
            <div class="w-6/12 flex flex-row items-center">
                <!-- <img src="../../../public/images/user.jpg" alt="" class="rounded-full h-12 w-12"> -->
                <div class="flex flex-col mx-2">
                    <a href="#">
                    <h2 class="leading-normal font-medium text-1xl">
                        <!-- {{ data.name }} -->
                        Olaegbe Samuel
                    </h2>
                    </a>
                    <p class="leading-none">Hello world</p>
                </div>
            </div>
            <div class="w-6/12 flex flex-row items-center justify-end content-center">
                <button class="btn-has-icon flex flex-row w-3/12 px-3 justify-between items-center bg-grey rounded br-1">
                    <!-- <img src="../../../public/images/favorite.svg" class="h-4 w-4" alt="">  --> Like
                </button>
                <button class="btn-has-icon flex flex-row w-3/12 px-3 justify-between items-center bg-grey rounded br-1">
                    <!-- <img src="../../../public/images/favorite.svg" class="h-4 w-4" alt="">  --> Save
                </button>
            </div>
        </div>
         <div class="image-display-main">
            <img src="https://i.ytimg.com/vi/BEm8MzrdkJ0/maxresdefault.jpg" alt="">
        </div>
        <div class="image-display-footer p-5">
            <div class="sm-area flex flex-row justify-between">
                <div class="sm-btn flex flex-row justify-between">
                    <a href="#" v-for="item in 3" :key="item" class="w-4/12 px-4 btn-primary py-1 rounded-1 border-grey-400 bg-grey">Pinterest</a>
                </div>
                <div class="sm-follow flex">
                    <a href="#" class="btn-primary font-medium">Follow @xshots</a>
                </div>
            </div>
            <span class="dash"></span>
            <div class="description-area">
                <p class="leading-snug text-sm">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate qui dolorem optio expedita, voluptatum dolores ut, veniam possimus sunt praesentium voluptates esse nemo magnam. Nisi quos a commodi nulla ipsum?
                </p>
            </div>
            <span class="dash block h-dash w-full bg-dark-grey my-2"></span>
            <div class="meta-area my-3 flex flex-row justify-between">
                <div class="meta-item w-4/12" v-for="item in 2" :key="item">
                    <h1 class="title text-sm text-subtitle">Labels/Tags</h1>
                    <div class="meta-item-child flex flex-row flex-wrap">
                        <a href="#" class="leading-none" v-for="items in 4" :key="items">DSLR</a>
                        <a href="#" class="leading-none" v-for="items in 4" :key="items">DSLR</a>
                        <a href="#" class="leading-none" v-for="items in 4" :key="items">DSLR</a>
                        <a href="#" class="leading-none" v-for="items in 4" :key="items">DSLR</a>
                    </div>
                </div>
                <div class="meta-item w-4/12">
                    <h1 class="title text-sm text-subtitle">Colors</h1>
                    <div class="meta-item-child flex flex-row flex-wrap justify-between">
                        <a href="#" class="color block bg-black h-3 w-6 rounded hover:h-3 hover:2-8" v-for="items in 3" :key="items"></a>
                    </div>
                </div>
            </div>
            <span class="dash block h-dash w-full bg-dark-grey my-5"></span>

            <div class="image-meta flex flex-row">
                <div class="comments w-8/12">
                    <div class="comment-item">
                        <div class="w-full flex flex-row items-center">
                            <div class="w-1/12">
                                <!-- <img src="../../../public/images/user.jpg" alt="" class="rounded-full h-auto w-auto"> -->
                            </div>
                            <div class="flex flex-col mx-2 w-11/12">
                                <a href="#">
                                    <h2 class="leading-normal font-medium text-1xl">Olaegbe Samuel</h2>
                                </a>
                                <p class="leading-none text-gray-500 text-sm">3 mins ago</p>
                            </div>
                        </div>
                        <div class="w-full flex flex-row">
                            <div class="w-1/12"></div>
                            <div class="w-11/12 m-2">
                                <p class="leading-snug text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat nobis suscipit perferendis commodi ipsum deleniti minima, consequatur nesciunt aliquid optio modi ratione voluptas obcaecati consequuntur. Ut ab a corrupti esse?</p>
                                <div class="comment-links flex flex-row justify-between">
                                    <a href="#" class="text-sm text-grey">Like</a>
                                    <a href="#" class="text-sm text-grey">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item">
                        <div class="w-full flex flex-row items-center">
                            <div class="w-1/12">
                                <!-- <img src="../../../public/images/user.jpg" alt="" class="rounded-full h-auto w-auto"> -->
                            </div>
                            <div class="flex flex-col mx-2 w-11/12">
                                <a href="#">
                                    <h2 class="leading-normal font-medium text-1xl">Olaegbe Samuel</h2>
                                </a>
                                <p class="leading-none text-gray-500 text-sm">3 mins ago</p>
                            </div>
                        </div>
                        <div class="w-full flex flex-row">
                            <div class="w-1/12"></div>
                            <div class="w-11/12 m-2">
                                <p class="leading-snug text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat nobis suscipit perferendis commodi ipsum deleniti minima, consequatur nesciunt aliquid optio modi ratione voluptas obcaecati consequuntur. Ut ab a corrupti esse?</p>
                                <div class="comment-links flex flex-row justify-between">
                                    <a href="#" class="text-sm text-grey">Like</a>
                                    <a href="#" class="text-sm text-grey">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="meta-item flex flex-col w-4/12 items-center">
                    <div class="flex flex-row items-center w-full">
                        <div class="w-1/12">
                            <!-- <img src="../../../public/images/favorite.svg" class="h-3 w-3" alt=""> -->
                        </div>
                        <div class="w-11/12">
                            <p>12,000 likes</p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-full">
                        <div class="w-1/12">
                            <!-- <img src="../../../public/images/favorite.svg" class="h-3 w-3" alt=""> -->
                        </div>
                        <div class="w-11/12">
                            <p>12,000 likes</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
