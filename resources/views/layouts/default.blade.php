<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('head')  
    </head>
    <body class="font-sans text-base text-grey-darker leading-loose">
        <div id="app">
            @include('partials.nav')
            @yield('main_content')
            <app-footer></app-footer>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>