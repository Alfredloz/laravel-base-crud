@extends('layouts.app')
@section('title')
    Posts
@endsection
@section('content')
    <h1>All posts</h1>
    <a href="{{ route('post.create') }}" class="btn btn-red">Insert new Post</a>

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
                <td>
                    <a href="{{ route('post.show', $post) }}" class="btn">View</a>
                    <a href=" {{ route('post.edit', $post) }}" class="btn">Edit</a>
                    <form action="{{ route('post.destroy', $post) }} " method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Cancella" class="btn">    
                    </form>
                </td>
            </tr>
            
            @endforeach
            
        </tbody>
    </table>
    

@endsection