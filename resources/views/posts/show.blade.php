
@extends('layouts.app')

@section('content')
<table class="table" style="width: 50%; margin-left:auto; margin-right: auto">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <h1 style="width: 50%; margin-left:auto; margin-right: auto" >Show Book</h1>
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
            </tr>
    </tbody>
</table>

@endsection 