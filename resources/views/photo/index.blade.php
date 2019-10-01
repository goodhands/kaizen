@extends('layouts.default')

@section('main_content')
    {{-- <photo-single></photo-single> --}}
    {{-- Insert other miscellaneous here --}}
    <div class="main-content-single bg-white-ter flex">
        <div class="shadow-small-outline main-content m-auto my-20 w-8/12 bg-white h-auto rounded">
            <div class="header p-5 flex flex-row justify-between">
                <div class="w-6/12 flex flex-row items-center">
                    <img src="{{$photo->user->avatar}}" alt="{{$photo->user->avatar}}" class="rounded-full h-12 w-12"> 
                    <div class="flex flex-col mx-2">
                        <a href="/{{$photo->user->username}}">
                            <h2 class="leading-normal font-medium text-1xl">
                                {{$photo->user->fullname()}}
                            </h2>
                        </a>
                        <p class="leading-none text-sm">
                            {{$photo->user->profession}}
                        </p>
                        <p class="leading-none mt-1 text-light-grey text-xs">
                            Published in <a href="/category/{{$photo->category->slug}}" class="hover:underline">{{$photo->category->label}}</a>
                        </p>
                    </div>
                </div>
                <div class="flex flex-row items-center justify-between content-center">
                    <button class="like-btn mr-2">
                        <img src="images/favorite.svg" class="h-4 w-4" alt="">
                    </button>
                    <button class="like-btn">
                        <img src="images/save.svg" class="h-4 w-4" alt="">
                    </button>
                </div>
            </div>
             <div class="image-display-main">
                <img src="{{$photo->asset_url}}" alt="{{substr($photo->description, 0 , 20)}}">
            </div>
            <div class="image-display-footer p-5">
                <div class="sm-area flex flex-row justify-between">
                    <div class="sm-btn flex flex-row justify-between">
                        {{$photo->title}}
                    </div>
                    <div class="sm-follow flex">
                        <a href="#" class="btn-primary font-medium">Follow {{"@".$photo->user->username}}</a>
                    </div>
                </div>
                <span class="dash"></span>
                <div class="description-area">
                    <p class="leading-snug text-sm">
                        {{$photo->description}}
                    </p>
                </div>

                <span class="dash block h-dash w-full bg-dark-grey my-2"></span>
                <div class="meta-area my-3 flex flex-row justify-between">
                    <div class="meta-item w-4/12">
                        <h1 class="title text-sm text-subtitle">Settings</h1>
                        <div class="meta-item-child flex flex-row flex-wrap">
                            <a :href="'/aperture/2-8'">
                                <div class="settings-item flex items-center w-full">
                                        <img src="images/diaphragm.png" class="h-4 w-4 mr-2" alt="Aperture">
                                        <strong class="text-italics mr-2">f</strong>  2/8
                                </div>
                            </a>
                        </div>
                        <div class="meta-item-child flex flex-row flex-wrap">
                            <a :href="'/aperture/2-6'">
                                <div class="settings-item flex items-center w-full">
                                        <img src="images/diaphragm.png" class="h-4 w-4 mr-2" alt="Aperture">
                                        <strong class="text-italics mr-2">ISO</strong>  8000
                                </div>
                            </a>
                        </div>
                        <div class="meta-item-child flex flex-row flex-wrap">
                            <a :href="'/aperture/2-6'">
                                <div class="settings-item flex items-center w-full">
                                        <img src="images/diaphragm.png" class="h-4 w-4 mr-2" alt="Aperture">
                                        <strong class="text-italics mr-2">Shutter</strong>  1/4000th
                                </div>
                            </a>
                        </div>
                        <div class="meta-item-child flex flex-row flex-wrap">
                            <a :href="'/aperture/2-6'">
                                <div class="settings-item flex items-center w-full">
                                        <img src="images/diaphragm.png" class="h-4 w-4 mr-2" alt="Aperture">
                                        <strong class="text-italics mr-2">Lens</strong>  300mm
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="meta-item w-4/12">
                        <h1 class="title text-sm text-subtitle">Tooling</h1>
                        <div class="meta-item-child flex flex-row flex-wrap">
                            <a :href="'/tags/'+tag.slug" class="leading-none" v-for="tag in 3" :key="tag.id">Tripod</a>
                        </div>
                    </div>
                    <div class="meta-item w-4/12">
                        <h1 class="title text-sm text-subtitle">Extras</h1>
                        <div class="meta-item-child flex flex-row flex-wrap justify-between">
                            <a href="#" class="color block bg-black h-3 w-6 rounded hover:h-3 hover:2-8" v-for="items in 3" :key="items"></a>
                        </div>
                    </div>
                </div>
                <span class="dash block h-dash w-full bg-dark-grey my-5"></span>
    
                <div class="image-meta flex flex-row">
                    <i data-feather="heart"></i>
                   <Comments post="{{$photo->slug}}" />
    
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
                        <div class="similar-images">
                            <h2 class="font-medium">
                                <a href="{{$photo->user->username}}">
                                    Also by "@"{{ $photo->user->username }}
                                </a>
                            </h2>
                            <similar-image-card user="{{$photo->user->id}}" current_photo="{{$photo->slug}}"></similar-image-card>
                        </div>
                        <div class="tags flex flex-row flex-wrap">
                            {{-- <a href="#" class="tag" v-for="tag in item.tags" :key="tag.id">@{{tag.label}}</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
