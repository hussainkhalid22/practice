@extends('main.layout')

@section('content')
    <h1>About Us</h1>
    <p>This is the about page of the demo application.</p>
    <a href="{{ url('/') }}">Go to Home Page</a><br>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 20px;
            text-align: center;
            box-sizing: border-box;

        }
        h1 {
            color: #2c3e50;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
        }
        a {
            color: #2980b9;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }

    </style>
    <!-- {{URL::to('/')}}<br>
    {{URL::to('/about')}}<br>
    {{URL::to('/contact')}} -->
    {{ URL::current() }}<br>
    <!-- {{ url()->current() }}<br> -->
    {{ URL::full() }}<br>
@endsection