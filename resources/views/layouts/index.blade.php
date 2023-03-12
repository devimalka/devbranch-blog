@extends('layouts.base')


@section('content')

<ul>
    @foreach($posts as $post)
    <li><a href="{{ route('blog.show',$post->id) }}">{{$post->title}}</a></li>
    @endforeach
</ul>


@endsection

