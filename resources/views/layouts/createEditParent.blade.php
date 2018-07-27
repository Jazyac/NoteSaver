@extends('layouts.parentNote')

@section('notePageContent')

@yield('createEditSpecializedContent')


 <div class="form-group">
   
   {!! Form::text('name', null, ['class' => 'form-control','style'=>'border: none;border-color: transparent; font-weight: bold;text-align: center;','maxlength'=>'32','placeholder'=>'Enter Name Here']) !!}
</div>

<div class="form-group">

   {!! Form::textarea('content', null, ['class' => 'form-control','style'=>'border: none;border-color: transparent;','placeholder'=>'Start typing your note here....']) !!}
</div>




@endsection