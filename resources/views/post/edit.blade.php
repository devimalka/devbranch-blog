@extends('layouts.base')

@section('content')

<div class="container">
<form action="{{ route('blog.update', ['blog' => $post->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="test" class="form-control" id="exampleFormControlInput1" name='title' value='{{$post->title}}'>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Content</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='body'>{{ $post->body }}</textarea>
</div>

        <button>submit</button>
    </form>
</div>

@endsection