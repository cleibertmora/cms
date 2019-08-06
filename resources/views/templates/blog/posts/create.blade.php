@extends('templates.layout.main')

@section('content')

    {{ Form::open(['route' => 'posts.store', 'method' => 'post', 'files' => true], ['class' => 'form']) }}

        <div class="form-group">
            {{ Form::label('title', 'URL amigable') }}
            {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
        </div>

        <div class="form-group">
            {{ Form::label('body', 'Descripción') }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Guardar', ['class' => 'btn']) }}
        </div>

    {{ Form::close() }}

@endsection