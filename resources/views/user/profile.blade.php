@extends('layouts.default')

@section('main_content')
    @include('partials.user.header')
    <div class="p-primary bg-white-ter relative">
        <div class="flex flex-row">
            @include('partials.user.sidebar')
            <div class="w-9/12">
                @if(count($user->photos) < 1)
                    @ifStranger($user)
                        Hello, {{$user->username}} has not uploaded any photos yet
                        {{$user->firstname}}
                        {{$user->lastname}}
                    @else
                        Hey {{$user->username}}, why not upload your first photo today? It's simple and straightforward.
                    @endif
                @else
                @endif
            <image-card :data-profile="true"></image-card>
            </div>
        </div>
    </div>
@endsection