@extends('layouts.base')


@section('content')



        <ul class="list-group list-group-flush">
        @foreach($posts as $post)
        <!-- <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><a class="btn btn-primary" href="{{ route('blog.show',$post->id) }}">{{ $post->title }}</h5></a>
                </div>
            </div>
        </div> -->
        <li class="list-group-item"><a class='text-decoration-none' href="{{ route('blog.show',$post->id) }}">{{ $post->title }}</a></li>
        @endforeach
      
        {{ $posts->links() }}
@endsection

