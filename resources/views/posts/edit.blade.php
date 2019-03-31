@extends('layouts.app')

@section('content')
    <h1 class='m-5'>Edit Post</h1>
        <form  class='jumbotron' action="{{ url('/posts',['id'=>$post->id]) }}" method="POST" >
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class='form-group'>
            Title:
            <input type='text' name='title' value='{{$post->title}}' class='form-control' required autofocus/>
            </div>
            <div class='form-group'>
            Body:
            <textarea name='body' placeholder="Write something"  id='article-ckeditor' class='form-control' required>
                {{$post->body}}
            </textarea>
            </div>
            <input type='submit' value='submit' class='btn btn-success'/>
        </form>
@endsection