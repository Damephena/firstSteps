@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h3>Add New User to {{ config('app.name', 'App')}}</h3>
        </div>
        <div class="col-sm-4">
            <a href="/cruds" class="btn btn-danger">Cancel</a>
        </div>
    </div> <hr>

    {!! Form::open(array('method' => 'post', 'action' => 'CrudsController@store')) !!}
        <div class="form-group">
            {{ Form::label('first_name', 'First Name') }}
            {{ Form::text('first_name', '', ['class' => 'form-control', 'required']) }}
        </div>
        <div class="form-group">
            {{ Form::label('last_name', 'Last Name') }}
            {{ Form::text('last_name', '', ['class' => 'form-control', 'required']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', '', ['class' => 'form-control', 'required']) }}
        </div>
        <div class="form-group">
            {{ Form::label('user_type', 'User type') }}
            {{ Form::select('user_type', array(
                'User' => array('regular' => 'regular', 'retailer' => 'retailer', 'manufacturer' => 'manufacturer'),
                'Admin' => array('Admin' => 'Admin', 'Programmer' => 'Programmer')
            ), 'regular', ['class' => 'form-control']) }}
        </div>
        {{ Form::submit('Add', ['class' => 'btn btn-success'])}}
    {!! Form::close() !!}

</div>
    
@endsection