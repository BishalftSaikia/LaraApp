@extends('layouts.app')

@section('content')
    <div class='jubotron text-center mt-5 bg-light'>
    <h1 class='m-5'>{{$indexTitle}}</h1>
    <p>Home page of QuickStart Laravel app</p>
    <p><a class='btn btn-primary btn-lg mr-2' href='/login' role='button'>Login</a> <a class='btn btn-success btn-lg ml-2' href='/register' role='button'>Register</a></p>
    </div>
@endsection

       
