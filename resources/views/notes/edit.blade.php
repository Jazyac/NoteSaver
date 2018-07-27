
@extends('layouts.createEditParent')

@section('createEditSpecializedContent')

{!! Form::model($note, [
    'method' => 'PATCH',
    'route' => ['notes.update', $note->id]
]) !!}

@endsection   