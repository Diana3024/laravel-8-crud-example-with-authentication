@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section. Click on the <b>Contact Form</b> to proceed further </p>
        {{-- <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a> --}}
        @endauth

        @guest
        <h1>Welcome to my Test</h1>
        <p class="lead">Your viewing the main page. Please login to view the restricted data. If you are <b>first time user</b>, kindly register before login</p>
        @endguest
    </div>
@endsection
