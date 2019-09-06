@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card border-light text-black bg-light mb-3" style="max-width: 100%;">
            <div class="card-header">
                <div class="row">
                    <a href="/cruds" class=" col-sm-4">Back</a>
                    <h5 class="text-right col-sm-8">User info</h5>
                </div>
            </div>
                <div class="card-body">
                    <h1 class="card-title">{{ $crud->first_name }} {{ $crud->last_name }}</h1>
                    <h6 class="card-subtitle mb-2 text-muted">User ID: {{ $crud->id }}</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Email: {{ $crud->email }}</li>
                    <li class="list-group-item">User type: {{ $crud->user_type }}</li>
                    <li class="list-group-item">Account created at: {{ $crud->created_at }}</li>
                </ul>
                @if (!Auth::guest())
                        <div class="card-body row">
                            <a href="/cruds/{{ $crud->id }}/edit" class="card-link btn btn-primary col-sm-6">Edit</a>
                            {!! Form::open(array('method' => 'delete', 'action' => ['CrudsController@destroy', $crud->id], 'class' => 'col-sm-6')) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger card-link col-sm-12']) !!}
                            {!! Form::close() !!}
                        </div>
                @endif
            </div>
            <div class="card-footer text-muted text-right">
                <p>Last updated: {{ $crud->updated_at }}</p>
            </div>
        </div>
    </div>
@endsection