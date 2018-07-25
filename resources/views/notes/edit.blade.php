@extends('layouts.template')

@section('notePageContent')

<div class="container">


<a style="float: left;" href="{{ URL::to('notes') }}"><span class="glyphicon glyphicon-arrow-left"></span></a>
   

{!! Form::model($note, [
    'method' => 'PATCH',
    'route' => ['notes.update', $note->id]
]) !!}

 <div class="form-group">
     
        {!! Form::text('name', null, ['class' => 'form-control','style'=>'border: none;border-color: transparent; font-weight: bold;text-align: center;','maxlength'=>'32','placeholder'=>'Enter Name Here']) !!}
    </div>

    <div class="form-group">
  
        {!! Form::textarea('content', null, ['class' => 'form-control','style'=>'border: none;border-color: transparent;','placeholder'=>'Start typing your note here....']) !!}
    </div>


 {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>
@endsection
