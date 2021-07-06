
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
      <h1 style="width: 50%; margin-left:auto; margin-right: auto" >My Products</h1>
      <a class="btn btn-primary" href="/posts/create" role="button" style="margin-left: 25%; margin-bottom: 10px; ">Add Product</a>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td> 
                  <a class="btn btn-primary" href="/posts/{{ $post->id }}" role="button">View</a>  
                 
                </td>
                
            </tr>
        @endforeach
    </tbody>
    
  </table>

@endsection 