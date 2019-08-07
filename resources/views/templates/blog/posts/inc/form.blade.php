<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
</div>

<div class="form-group">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'Post Content:') }}
    {{ Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body', 'rows' => '30']) }}
</div>

<div id="editor">
    <div id='edit' style='margin-top:30px;'>
    </div>
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn']) }}
</div>