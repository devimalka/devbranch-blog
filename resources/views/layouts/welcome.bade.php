@extends('layouts.index')
@section('content')

$forelse($posts as $post)

<ul>{{{$post->title}}}</ul>

@endforelse

@endsection