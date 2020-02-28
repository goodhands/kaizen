@extends('layouts.default')
    @push('head-info')
        <title>
            {{$category->label . ' photos on ' . config('app.name') }}
        </title>
    @endpush
@section('main_content')
    @include('partials.category.header')
    <div class="app-body p-primary">
        <div class="flex flex-row"></div>
        <image-card url="{{ '/ajax/category/' . $category->slug . '/photos'}}"></image-card>
    </div>
@endsection