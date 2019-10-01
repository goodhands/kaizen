@extends('layouts.default')

@section('main_content')    
    <home-hero></home-hero>
    @include('partials.filter')
    <home-main-content></home-main-content>
@endsection
