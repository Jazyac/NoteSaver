@extends('layouts.template')

@section('notePageContent')

<div class="container">



{!! Form::model($note, [
    'method' => 'PATCH',
    'route' => ['notes.update', $note->id]
]) !!}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
    {{ Form::label('content', 'Contents') }}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>


 {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>
@endsection
