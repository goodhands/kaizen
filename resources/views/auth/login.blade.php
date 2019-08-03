@extends('layouts.default')

@section('head')
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Sign up</title>
@endsection
@section('main_content')
    <title>Sign In</title>
    <in-app-auth :modal="false" class="bg-white-ter p-primary"></in-app-auth>
@endsection
