@extends('layouts.app')
@section('title')
    Posts Create
@endsection
@section('content')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="" id="title" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Inserisci il titolo del tuo post</small>
      <br>
      <label for="body">Boby del Post</label>
      <input type="text" name="body" id="body" class="form-control">
      <br>  
      <button type="submit" class="btn btn-primary">Invia</button>
    </div>
@endsection 