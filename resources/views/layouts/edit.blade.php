@extends('layouts.base')

@section('content')

<div class="container">
    <form action="{{ route('BlogPostController@update') }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text " placeholder="Enter Post Title" value="{{$post->title}}">
        </div>

        <div>
            <label for="body">Body</label>
            <input type="text" placeholder="enter post body" value="{{$post->body}}">
        </div>

        <input type="submit" value="submit">
    </form>
</div>

@endsection