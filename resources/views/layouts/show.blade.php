@extends('layouts.base')

@section('content')
<div>
<h1>{{$post->title}}</h1>

<p>{{$post->body}}</p>


@auth
@if(Auth::id()==$post->user_id)
<a href="{{ route('blog.edit',$post->id) }}">edit</a>
<form action="{{ route('blog.destroy',$post->id) }}" method='POST'>
@csrf
@METHOD('DELETE')
<input type="submit" value='delete'>
</form>
@endif
@endauth
</div>
@endsection

