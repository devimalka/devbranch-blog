@extends('layouts.base')

@section('content')
<div>
<h1>{{$post->title}}</h1>

<p>{{$post->body}}</p>

<a href="./{{$post->id}}/edit">edit</a>

</div>
@endsection

