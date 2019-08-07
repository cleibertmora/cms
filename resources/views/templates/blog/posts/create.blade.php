@extends('templates.layout.main')

@section('content')

    {{ Form::open(['route' => 'posts.store', 'method' => 'post', 'files' => true], ['class' => 'form']) }}

        @include('templates.posts.inc.form')

    {{ Form::close() }}

@endsection