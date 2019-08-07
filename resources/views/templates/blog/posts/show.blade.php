@extends('templates.layout.main')

@section('content')

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $post->title }}</h3>
            {!! $post->body !!}
        </div>
    </div>

@endsection