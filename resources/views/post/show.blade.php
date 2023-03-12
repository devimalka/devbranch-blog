@extends('layouts.base')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
        </div>
    </div>
</div>

@foreach($post->comments as $comment)
         
            <div class="comment mt-4 text-justify float-left">
                    <h4>Jhon Doe</h4>
                    <span>{{$comment->created_at}}</span>
                    <br>
                    <p>{{ $comment->comment }}</p>
                </div>
            @endforeach



@auth
@if(Auth::id()==$post->user_id)
<button type="button" class="btn btn-outline-danger"><a href="{{ route('blog.edit',$post->id) }}">Edit</a></button>
<form action="{{ route('blog.destroy',$post->id) }}" method='POST'>
@csrf
@METHOD('DELETE')
<button type="submit" class="btn btn-outline-danger">Delete</button>
</form>
@endif
@endauth


<div>
    <form action="{{ route('blog.comment.store',$post) }}" method='POST'>
        @csrf
    <input type="text" name='comment'>
    <input type="submit">

    </form>
</div>
</div>
@endsection

