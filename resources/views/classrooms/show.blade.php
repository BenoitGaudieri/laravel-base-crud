@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">{{ $classroom->name }}</h1>
    
    <ul class="list-group">
        <li class="list-group-item">
            ID: {{$classroom->id}}
        </li>
        <li class="list-group-item">
            Description: {{$classroom->description}}
        </li>
        <li class="list-group-item">
            Created: {{$classroom->created_at}}
        </li>
        <li class="list-group-item">
            Updated: {{$classroom->updated_at}}
        </li>
    </ul>


@endsection