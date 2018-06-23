@extends('layouts.template')

@section('notePageContent')

<center>
   <a class="btn btn-success btn-block" href="{{ URL::to('notes/create') }}">Start a Note.. </a>
</center>



@endsection
