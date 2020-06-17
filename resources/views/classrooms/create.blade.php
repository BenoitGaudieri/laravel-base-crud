@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Create a new classroom</h1>

    {{-- Error section --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                
                @endforeach
            </ul>
        </div>
        
    @endif

    {{-- Post form --}}
    <form action="{{route("classrooms.store")}}" method="POST">
        @csrf
        @method("POST")

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Class name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description" placeholder="Class description">
        </div>
        <input type="submit" value="Create" class="btn btn-primary">
    </form>
    
@endsection