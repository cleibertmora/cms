@extends('templates.layout.main')

@section('content')

    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}

        @include('templates.blog.posts.inc.form')

    {{ Form::close() }}

    <script>
        CKEDITOR.config.height = 700;
        CKEDITOR.config.width  = 'auto';
        CKEDITOR.config.toolbarGroups = [
            { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
            { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
            { name: 'forms' },
            '/',
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
            { name: 'links' },
            { name: 'insert' },
            '/',
            { name: 'styles' },
            { name: 'colors' },
            { name: 'tools' },
            { name: 'others' },
            { name: 'about' }
        ];
        
        CKEDITOR.replace('body')
    </script>

@endsection