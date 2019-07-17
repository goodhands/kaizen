<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    @include('partials.nav')
    <body class="font-sans text-base text-grey-darker leading-loose">
        <div id="app">
            @yield('main_content')
        </div>
        @include('partials.footer')
    </body>