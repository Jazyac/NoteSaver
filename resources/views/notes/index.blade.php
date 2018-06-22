@extends('layouts.template')

@section('notePageContent')

<center>
   <a class="btn btn-success btn-block" href="{{ URL::to('notes/create') }}">Start a Note.. </a>
</center>
<table class="table table-striped table-bordered">
    
    <tbody>
    @foreach($notes as $key => $value)
        <tr>
         
            <td>{{ $value->name }}</td>
            <td>{{ str_limit($value->content, $limit = 100, $end = '...') }} </td>
            
            <td><a href="{{ route('notes.edit',$value->id) }}" class="btn btn-primary">Continue...</a> </td>
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
