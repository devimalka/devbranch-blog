@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ ucfirst($post->title )}}</h2>
                <p>{{ $post->body }}</p>
            </div>
        </div>
    </div>

    <div class="container">
<div class="row">
<div class="col-md-12">
    @auth
        @if (Auth::id() == $post->user_id)
        <div class="d-flex p-2 bd-highlight ">
        <button type="button" class="btn btn-outline-danger"><a  class="text-decoration-none" href="{{ route('blog.edit', $post->id) }}">Edit</a></button>
            <form action="{{ route('blog.destroy', $post->id) }}" method='POST'>
                @csrf
                @METHOD('DELETE')
                <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
        </div>
            
        @endif
    @endauth

    @foreach ($post->comments as $comment)
        <div class="comment mt-4 text-justify float-left">
        
            <span>{{ $comment->created_at }}</span>
            <br>
            <p>{{ $comment->comment }}</p>
        </div>
    @endforeach
</div>
</div>
</div>

  


<div class="container">
<div class="row">
<div class="col-md-12">
        <form action="{{ route('blog.comment.store', $post) }}" method='POST'>
  @csrf
  <div class="form-inline">
    <label for="comment" class="form-label">Comment</label>
    <input type="text" name='comment'>
    <button type="submit" class="btn btn-primary">Reply</button>
  </div>
 
</form>


</div>
</div>
</div>


 
    
@endsection
