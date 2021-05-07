
@extends('layouts.app')

@section('content')
<table class="table" style="width: 50%; margin-left:auto; margin-right: auto">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>
      <h1 style="width: 50%; margin-left:auto; margin-right: auto" >Show Posts</h1>
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->created_at}}</td>
                <td> 
                @if ($post -> img)
                  <img src="{{ URL::asset('/storage/img/'.$post->img) }}" alt=" {{ $post->img }}" style="width:100px; height: 100px"/>
                @else 
                  No Image Available
                @endif
                </td>
            </tr>
    </tbody>
</table>
@include('/posts/comments')
@endsection 