@extends('layouts.app')

@section('content')
<div class='jubotron mt-5 text-center'>
    <h1 class='m-5'>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class="list-group">
        @foreach ($services as $service)
            <li class="list-group-item bg-light"> {{$service}}</li>
        @endforeach
        </ul>
    @endif
</div>
@endsection

        
    