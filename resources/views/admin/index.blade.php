@extends('layouts.template')

@section('parentNotePageContent')



<table>

<tr>
<td><center><label>Swtich color scheme:</label></center>
</td>
<td>
{!! Form::open([
            'method' => 'POST',
            'route' => ['admin.switch']
        ]) !!}
            {!! Form::submit('Switch', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
</td>

</tr>

</table>





@endsection
