@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="{{ URL::to('notes') }}">Notes.</a>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ URL::to('notes/create') }}">Start a Note.. <span class="sr-only">(current)</span></a>
      </li>

    </ul>
  </div>
</nav>
</div>

<!-- auto generetated by auth start-->
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        
                    </div>
<!-- auto generetated by auth finish-->

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif


            @yield('notePageContent')

            </div>
        </div>
    </div>
</div>
@endsection