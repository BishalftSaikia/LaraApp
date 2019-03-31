@extends('layouts.app')

@section('content')
<h1 class='m-5'>Posts</h1>
 @if(count($posts)>0)
    @foreach ($posts as $post)
      <a href='posts/{{$post->id}}'>
        <div class='jumbotron'>
        <h3>{{$post->title}}</h3>
        <small>{{$post->created_at}} created by {{$post->user->name}}</small>
        </div>
      </a>
    @endforeach
    {{$posts->links()}}
 @else
    <p>No Post Found</p>
    <a href='posts/create' class='btn btn-success'>Create Post</a>
 @endif

@endsection