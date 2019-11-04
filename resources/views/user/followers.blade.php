@extends('layouts.default')

@section('main_content')
    @include('partials.user.header')
    <div class="p-primary bg-white-ter relative">
        <div class="flex flex-row">
            @include('partials.user.sidebar')
            {{-- <div class="sm:w-full w-9/12 flex flex-row flex-wrap"></div> --}}
            <follows follow-type="followers" user-id="{{$user->username}}"></follows>
        </div>
    </div>
@endsection
