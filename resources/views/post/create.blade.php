@extends('layouts.app')
@section('title')
    Posts Create
@endsection
@section('content')
<form  action="{{ route('post.store') }}" class="form-group" method="post">
  @csrf

  @method('POST')

  <label for="title">Title</label>
  <input autocomplete="off" type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Inserisci il titolo del tuo post</small>
  <br>
  <label for="body">Boby del Post</label>
  <textarea style="resize: none" name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
  <br>  
  <input type="submit" value="Invia" class="form-control btn-primary">
</form>
@endsection 