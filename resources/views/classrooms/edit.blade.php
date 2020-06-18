@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Edit</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                
                @endforeach
            </ul>
        </div>
        
    @endif

    <form action="{{route("classrooms.update", $classroom->id)}}" method="POST">
        @csrf
        @method("PATCH")

        <div class="form-group">
            {{-- vale old name means that in case of error the name will still be displayed --}}
            <input type="text" class="form-control" name="name" placeholder="Class name" value=" {{ old("name", $classroom->name) }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description" placeholder="Class description" value="{{ old("description", $classroom->description) }}">
        </div>
        <input type="submit" value="Edit" class="btn btn-primary">
    </form>
    
@endsection