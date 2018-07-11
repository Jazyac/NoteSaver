@extends('layouts.template')

@section('notePageContent')

<center>
    <div>
   <a  class="btn btn-success halfWidth" href="{{ URL::to('notes/create') }}">Start a Note.. </a>
   <a class="btn btn-success halfWidth" href="{{ URL::to('notes/create') }}">Strip URL...</a>
   </div>
</center>



<table class="table table-striped table-bordered">
    
    <tbody>
    @foreach($notes as $key => $value)
        <tr>
         
            <td class="font-weight-bold">{{ $value->name }}</td>
            
            <td><a href="{{ route('notes.edit',$value->id) }}" class="btn btn-primary">Continue...</a> </td>
            <td><a href="{{ route('notes.email',$value->id) }}" class="btn btn-warning">Email Me</a> </td>
            <td>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['notes.destroy', $value->id]
        ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
   
            
            
            </td>
          
            
  
        </tr>
    @endforeach
    <tr>
 
    </tr>
    </tbody>
</table>


@endsection
