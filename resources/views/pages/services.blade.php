@extends('layouts.app')

@section('content')
    <div class="jumbotron container">
        <h1>{{$title}}</h1>
    </div>
    <div class="container">
        <ul class="list-group">    
            @if(count($services) > 0)
                @foreach($services as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            @endif
        </ul>
    </div>
@endsection