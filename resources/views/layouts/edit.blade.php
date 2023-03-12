@extends('layouts.base')

@section('content')

<div class="container">
<form action="{{ route('blog.update', ['blog' => $post->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">title</label>
            <input type="text" name='title' placeholder="Enter Post Title" value="{{$post->title}}">
        </div>

        <div>
            <label for="body">body</label>
            <input type="text" name='body' placeholder="enter post body" value="{{$post->body}}">
        </div>

        <button>submit</button>
    </form>
</div>

@endsection