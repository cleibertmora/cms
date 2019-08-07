@extends('templates.layout.main')

@section('content')

    @foreach($posts as $post)

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <a href="{{ route('posts.edit', $post->id) }}" class="card-link">edit</a>
                <a href="{{ route('posts.show', $post->id) }}" class="card-link">view</a>
                <a href="#" class="card-link">delete</a>
            </div>
        </div>

    @endforeach

@endsection