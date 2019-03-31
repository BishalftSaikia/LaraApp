@extends('layouts.app')

@section('content')
<a href="/posts" class='btn btn-primary mt-5'>Go Back</a>
<h1>{{$post->title}}</h1>
<hr/>
<div>
    <p>{!!$post->body!!}</p>
</div>
<hr/>
<small>written on{{$post->created_at}}</small>
<small> by {{$post->user->name}}</small>
@if(!Auth::guest() && auth()->user()->id == $post->user_id)
<a href='/posts/{{$post->id}}/edit'class='btn btn-secondary ml-5'>Edit</a>
<form action='{{ url('/posts',['id'=>$post->id])}}' method='POST' class='btn ml-5'>
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <input name='submit' type="submit" value='Delete'  class='btn btn-danger'/>
</form>
@endif

@endsection