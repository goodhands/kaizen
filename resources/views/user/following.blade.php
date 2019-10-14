@extends('layouts.default')

@section('main_content')
    @include('partials.user.header')
    <div class="p-primary bg-white-ter relative">
        <div class="flex flex-row">
            @include('partials.user.sidebar')
            {{-- <div class="w-9/12 flex flex-row flex-wrap justify-between"></div> --}}
            <follows follow-type="following" user-id="{{$user->username}}"></follows>
        </div>
    </div>
@endsection
