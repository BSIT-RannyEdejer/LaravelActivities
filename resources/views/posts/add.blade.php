
@extends('layouts.app')

@section('content')

<h1 style="width: 50%; margin-left:auto; margin-right: auto" >Add Book</h1>
<form action="/posts" method="POST" style="width: 50%; margin-left:auto; margin-right: auto">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input name="description" type="text" class="form-control" id="description" placeholder="Enter Description">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

@endsection 