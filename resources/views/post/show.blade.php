@extends('layouts.app')
@section('title')
    Posts
@endsection
@section('content')
    <h1>Post number: {{$post->id}} </h1>
    <a href="{{ route('post.index') }}" class="btn btn-red">Torna ai post</a>

    <h2>{{$post->title}}</h2>
    <p>{{$post->body}}</p>
    <p>{{$post->created_at}}</p>
    <p>{{$post->updated_at}}</p>    

@endsection