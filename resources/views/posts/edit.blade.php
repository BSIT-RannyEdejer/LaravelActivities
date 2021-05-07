
@extends('layouts.app')

@section('content')

<h1 style="width: 50%; margin-left:auto; margin-right: auto" >Edit Posts</h1>
<form action="/posts/{{ $post->id }}" method="POST" style="width: 50%; margin-left:auto; margin-right: auto">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title" value="{{ $post->title }}">
    </div>
    <div class="form-group"> 
      <label for="description">Description</label>
      <input name="description" type="text" class="form-control" id="description" placeholder="Enter Description" value="{{ $post->description }}"">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

@endsection 