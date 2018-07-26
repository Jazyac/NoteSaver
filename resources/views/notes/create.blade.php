@extends('layouts.parentNoteHead')

@section('notePageContent')

{!! Form::open([
    'route' => 'notes.store'
]) !!}

    <div class="form-group">
   
        {!! Form::text('name', null, ['class' => 'form-control','style'=>'border: none;border-color: transparent; font-weight: bold;text-align: center;','maxlength'=>'32','placeholder'=>'Enter Name Here']) !!}
    </div>

    <div class="form-group">
   
        {!! Form::textarea('content', null, ['class' => 'form-control','style'=>'border: none;border-color: transparent;','placeholder'=>'Start typing your note here....']) !!}
    </div>


 {!! Form::submit('Save', ['class' => 'btn btn-primary','name' => 'saveButton']) !!}
 {!! Form::submit('Save and Email', ['class' => 'btn btn-warning','name' => 'saveButton']) !!}

{!! Form::close() !!}


@endsection
