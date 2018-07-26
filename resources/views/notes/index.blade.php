@extends('layouts.template')

@section('parentNotePageContent')

<center>
    <div>
   <a  class="btn btn-success halfWidth" href="{{ URL::to('notes/create') }}">Start a Note... </a>
   <a class="btn btn-success halfWidth" href="{{ route('notes.openStrip') }}">Save Webpage Info...</a>
   </div>
</center>



<table class="table table-striped table-bordered">
    
    <tbody>
    @foreach($notes as $key => $value)
        <tr>
         
        

            <td><a href="{{ route('notes.edit',$value->id) }}" >{{ $value->name }}</a> </td>   
            
           
            <td >
                <div class="tdNoteTableControls">
            <a href="{{ route('notes.email',$value->id) }}" class="btn btn-outline-warning"><span class="glyphicon glyphicon-envelope"></span></a> 
           <br>
            {!! Form::open([
            'method' => 'DELETE',
            'route' => ['notes.destroy', $value->id]
        ]) !!}
           
        
        {!!
            Form::macro('deleteIconButton', function()
{
    return '<button type="submit" value="Delete" class="btn btn-outline-danger glyphicon glyphicon-trash">';
});
        
        !!}

    
        {!! Form::deleteIconButton()!!}
        
        {!! Form::close() !!}
</div>
            </td>

   
          
            
  
        </tr>
    @endforeach
    <tr>
 
    </tr>
    </tbody>
</table>


@endsection
