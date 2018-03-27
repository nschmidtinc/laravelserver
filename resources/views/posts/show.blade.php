@extends("layouts.app")

@section("content")
<a href="/mylaravelapp/public/posts" class="btn btn-default">go back!</a>
<h1>{{$post->title}}</h1>
<div>
    {{$post -> body}}
</div>
<hr>
<small>written on {{$post->created_at}}</small></hr>

@endsection