@extends('layouts.main')

@section('main-content')

    {{-- TODO: Sass with wrapper flex to center this page --}}
    <div class="wrapper">

        <h1 class="mb-4 text-success">Create a new teacher</h1>

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
        
        {{-- TODO: old value when error --}}
        <form action="{{route("teachers.store")}}" method="post">
            @csrf
            @method("POST")

            <div class="row form-group">
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="name" placeholder="Full name">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="age" placeholder="Age">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="gender" placeholder="Gender">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="class" placeholder="Class">
                </div>
            </div>
            <input type="submit" value="Create" class="btn btn-primary">

        </form>
    </div>


    
@endsection