@extends('main.layout')

@section('content')
    <h1>Admin Login</h1>
    <p>Please enter your credentials to access the admin panel.</p>
    @include('admin.login-form')
@endsection
