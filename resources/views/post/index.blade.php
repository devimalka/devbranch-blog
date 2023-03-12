@extends('layouts.base')


@section('content')


<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><a class="btn btn-primary" href="{{ route('blog.show',$post->id) }}">{{ $post->title }}</h5></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection

