@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.inc')
        <div class="row">
            <div class="col-8">
                <h1>Available Users</h1>
            </div>
            <div class="col-4">
            <a href="/cruds/create" class="btn btn-success">Add User</a>
            </div>
        </div>
    </div>
    @if(count($cruds) > 0)
        <div class="container">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                @foreach ($cruds as $user)
                    <tbody>
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            {{-- <td>{{ $user->id }}</td> --}}
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>
                                <a href="/cruds/{{ $user->id }}" class="btn btn-info">View User</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        {{ $cruds->links() }}
    @else
        <h4>There are no active users.</h4>
    @endif
@endsection