@extends('layouts.template')

@section('notePageContent')



<table class="table table-striped table-bordered">
    <thead>
        <tr>
     
            <td>Name</td>
            <td>Content</td>
     

        </tr>
    </thead>
    <tbody>
    @foreach($notes as $key => $value)
        <tr>
         
            <td>{{ $value->name }}</td>
            <td>{{ $value->content }}<br><a href="{{ route('notes.edit',$value->id) }}" class="btn btn-primary">Continue...</a>
            
           
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['notes.destroy', $value->id]
        ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
   
            
            
            </td>
          
            
  

        

            </td>
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
