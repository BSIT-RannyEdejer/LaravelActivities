
@extends('layouts.app')

@section('content')
<table class="table" style="width: 50%; margin-left:auto; margin-right: auto">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Created At</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <h1 style="width: 50%; margin-left:auto; margin-right: auto" >Show My Products</h1>
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->price}}</td>
                <td>{{$post->created_at}}</td>
                <td> 
                @if ($post -> img)
                  <img src="{{ URL::asset('/storage/img/'.$post->img) }}" alt=" {{ $post->img }}" style="width:100px; height: 100px"/>
                @else 
                  No Image Available
                @endif
                </td>
                <td>
                  <a class="btn btn-primary" href="/posts/{{ $post->id }}/edit" role="button">Edit</a>
                </td>
                <td >
              
                  <form action="posts/{{ $post->id }}" method="POST">
                    @csrf  
                    @method("DELETE")
                    <button style="" type="submit" name="submit" value="Delete"class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
        
    </tbody>
</table>
@include('/posts/comments')
@endsection 