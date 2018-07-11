@extends('layouts.template')

@section('notePageContent')

<div class="container">



{!! Form::open([
    'route' => 'notes.stripURL'
]) !!}

    <div class="form-group">
   
        {!! Form::text('url', null, ['class' => 'form-control','style'=>'border: none;border-color: transparent; font-weight: bold;text-align: center;','placeholder'=>'Enter URL Here']) !!}
    </div>

  
 {!! Form::submit('Strip', ['class' => 'btn btn-primary']) !!}


{!! Form::close() !!}

</div>
@endsection
