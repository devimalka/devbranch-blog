@extends('layouts.base')


@section('content')


<form action="{{ route('blog.store') }}" method='POST'>
@csrf
 @method('POST')

<label for="title">Title</label>
<input type="text" name='title'>


<label for="body">body</label>
<input type="text" name='body'>
<!-- <input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
<input type="submit" value='Submit'>

</form>

@endsection