<h2 style="width: 50%; margin-left:auto; margin-right: auto"> Comments:</h2>
  @if ($comments)
    @foreach ($comments as $comment)
      <h5 style="width: 50%; margin-left:auto; margin-right: auto"> From {{ $post->user->name}}:</h5> 
      <h5 style="width: 50%; margin-left:auto; margin-right: auto"> {{ $comment->description }} </h5>  
      <br>
    @endforeach     
  @endif

<h2 style="width: 50%; margin-left:auto; margin-right: auto">Add a comment</h2>  
<form method="POST" action="{{ route('comments.store')}}" style="width: 50%; margin-left:auto; margin-right: auto">
  @csrf
  <div class="form-group">
    <textarea class="form-control" name="description"></textarea>
    <input type="hidden" name="post_id" value="{{ $post->id }}">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-success" value="Add comment">
  </div>
</form>