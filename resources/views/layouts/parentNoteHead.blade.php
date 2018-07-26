@extends('layouts.template')

@section('parentNotePageContent')

<div class="container">

<a style="float: left;" href="{{ URL::to('notes') }}"><span class="glyphicon glyphicon-arrow-left"></span></a>


@yield('notePageContent')




</div>

@endsection
