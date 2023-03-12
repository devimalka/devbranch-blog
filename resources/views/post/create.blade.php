@extends('layouts.base')


@section('content')


<form action="{{ route('blog.store') }}" method='POST'>
@csrf
@method('POST')

 <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="test" class="form-control" id="exampleFormControlInput1" name='title'>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Content</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='body'></textarea>
</div>

<button class="btn btn-primary" type="submit">Post</button>

</form>


@endsection