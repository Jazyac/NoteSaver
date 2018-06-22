@extends('layouts.template')

@section('notePageContent')

<div class="container">



{!! Form::model($note, [
    'method' => 'PATCH',
    'route' => ['notes.update', $note->id]
]) !!}

    <div class="form-group">
     
        {!! Form::text('name', null, ['class' => 'form-control','style'=>'border: none;border-color: transparent; font-weight: bold;text-align: center;']) !!}
    </div>

    <div class="form-group">
  
        {!! Form::textarea('content', null, ['class' => 'form-control','style'=>'border: none;border-color: transparent;']) !!}
    </div>


 {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>
@endsection
