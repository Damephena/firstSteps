@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                {{-- @foreach ($cruds as $user)
                    @if ($user->user_type)
                        <h1>It worked</h1>
                    @else
                        <h1>It didn't</h1>
                    @endif
                @endforeach --}}
            </div>
        </div>
    </div>
</div>
@endsection
