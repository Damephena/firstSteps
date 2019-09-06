@extends('layouts.app')

@section('content')
    @if (!Auth::guest())
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h3>Edit <em>{{ $crud->first_name }}'s</em> info</h3>
                </div>
                <div class="col-sm-4">
                    <a href="/cruds" class="btn btn-danger">Cancel</a>
                </div>
            </div> <hr>
            {!! Form::open(array('method' => 'patch', 'action' => ['CrudsController@update', $crud->id])) !!}
                <div class="form-group">
                    {{ Form::label('email', 'Email') }}                    
                    {{ Form::email('email', $crud->email, ['class' => 'form-control', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('user_type', 'User type') }}
                    {{ Form::select('user_type', array(
                        'User' => array('regular' => 'regular', 'retailer' => 'retailer', 'manufacturer' => 'manufacturer'),
                        'Admin' => array('Admin' => 'Admin', 'Programmer' => 'Programmer')
                        ), $crud->user_type, ['class' => 'form-control']) }}
                </div>
                {{ Form::submit('Edit', ['class' => 'btn btn-info'])}}
            {!! Form::close() !!}
            </div>
        </div>
        @else
        <div class="container">
            <h3>Unauthorized Access!</h3>
            <small>Sign in or Register to continue on page.</small>
        </div>
    @endif
    
@endsection