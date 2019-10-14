@extends('layouts.default')

@section('main_content')
    @include('partials.user.header')
    <div class="p-primary bg-white-ter relative">
        <div class="flex flex-row">
            @include('partials.user.sidebar')
            <div class="w-9/12 flex flex-row flex-wrap justify-between">
                <image-card v-for="item in 24" :key="item" :style="{'width':'32%'}"></image-card>
                <image-popup v-if="this.$store.state.showImageModal" :modal="true" :data="popimageData"></image-popup>
            </div>
        </div>
    </div>
@endsection
