@extends('layouts.base')


@section('content')

<ul>
    @foreach($posts as $post)
    <li><a href="./blog/{{$post->id}}">{{$post->title}}</a></li>
    @endforeach
</ul>


@endsection

