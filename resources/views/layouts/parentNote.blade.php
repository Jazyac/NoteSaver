@extends('layouts.template')

@section('parentNotePageContent')

<div class="container">

<a style="float: left;" href="{{ URL::to('notes') }}"><span class="btn btn-outline-primary glyphicon glyphicon-arrow-left"></span></a>




@yield('notePageContent')

{!!
    Form::macro('saveIconButton', function()
{
    return '<button style="float: right;" type="submit" value="Save" class="btn btn-outline-primary glyphicon glyphicon-floppy-disk">';
});
!!}

    {!! Form::saveIconButton()!!}

{!! Form::close() !!}


</div>

@endsection
