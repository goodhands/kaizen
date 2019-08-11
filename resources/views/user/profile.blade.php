@extends('layouts.default')

@section('main_content')
    @include('partials.user.header')
    <div class="p-primary bg-white-ter relative">
        <div class="flex flex-row">
            @include('partials.user.sidebar')
            <div class="w-9/12 flex flex-row flex-wrap justify-between">
                <image-card :style="{'width':'100%', 'display' : 'flex', 'justify-content':'space-evenly'}" :data-profile="true"></image-card>
            </div>
        </div>
    </div>
@endsection
