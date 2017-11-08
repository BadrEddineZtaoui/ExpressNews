<div class="well well-small">
    {!! Form::open(['route' => 'categories.store', 'method' => 'POST', 'data-parsley-validate' => '']) !!}
        <h2>Nouvelle Categorie</h2>
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

        {{ Form::submit('Nouvelle Categorie', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}

    {!! Form::close() !!}
</div>
