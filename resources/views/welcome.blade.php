@extends('main.layout')
    @section('content')
<section>
    <h1>Welcome to the Demo Application</h1>
    <p>This is the home page.</p>
    <a href="{{ url('/about') }}">Go to About Page</a>
</section>

@endsection
</section>