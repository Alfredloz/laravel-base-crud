@extends('layouts.app')
@section('title')
    Posts
@endsection

@section('content')
    <h1>All posts</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Updated at</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>VIew | Edit | Cancel</td>
            </tr>
            
            @endforeach
            
        </tbody>
    </table>
    

@endsection