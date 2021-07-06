
@extends('layouts.app')

@section('content')
<table class="table" style="width: 50%; margin-left:auto; margin-right: auto">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <h1 style="width: 50%; margin-left:auto; margin-right: auto" >Products</h1>
      <a class="btn btn-primary" href="/posts/create" role="button" style="margin-left: 25%; margin-bottom: 10px; ">Add Products</a>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td> 
                  <a class="btn btn-primary" href="/posts/{{ $post->id }}" role="button">View</a>  
                  <!--
                  <a class="btn btn-primary" href="/posts/{{ $post->id }}/edit" role="button">Edit</a>
                </td>
                <td>
                  <form action="posts/{{ $post->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button style="margin-left: -205px" type="submit" name="submit" value="Delete"class="btn btn-danger">Delete</button>
                  </form>
                </td>-->
            </tr>
        @endforeach
    </tbody>
    
  </table>

@endsection     