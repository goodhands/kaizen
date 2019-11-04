@extends('layouts.default')
    @push('head-info')
        <title>
            {{$category->label . ' photos on ' . config('app.name') }}
        </title>
    @endpush
@section('main_content')
    @include('partials.category.header')
@endsection