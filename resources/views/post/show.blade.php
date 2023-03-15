@extends('layouts.base')

<!-- Show the document title -->
@section('title')
{{ucfirst($post->title)}}
@endsection

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
        
            <b><span>{{ $comment->user->name }}</span></b>
            <span>{{$comment->comment}}</span>
            <br>
            <p>{{ $comment->created_at }}</p>
            <!-- {{ \Carbon\Carbon::parse($comment->created_at)->format('d/m/Y')}}  -->
            

<!--           
            <form action="{{ route('blog.comment.destroy', ['blog'=>$comment->post_id,'comment' => $comment->id]) }}" method='DELETE'>
                @csrf
                @method("DELETE")
                <input type="submit" value='delete'>
            </form> -->
        </div>
    @endforeach
</div>
</div>
</div>

  


@auth
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
@endauth


    
@endsection
