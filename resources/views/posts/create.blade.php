@extends('layouts.app')

@section('content')
    <h1 class='m-5'>Create Post</h1>
        <form  class='jumbotron' action="{{ url('/posts') }}" method="POST" >
            {{ csrf_field() }}
            <div class='form-group'>
            Title:
            <input type='text' name='title' class='form-control' required autofocus/>
            </div>
            <div class='form-group'>
            Body:
            <textarea name='body' placeholder="Write something" id='article-ckeditor' class='form-control' required></textarea>
            </div>
            <input type='submit' value='submit' class='btn btn-primary'/>
        </form>
@endsection