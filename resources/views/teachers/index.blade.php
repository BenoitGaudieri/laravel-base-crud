@extends('layouts.main')

@section('main-content')

    {{-- if a teacher has been deleted display this alert --}}
    {{-- @if (session("deleted"))
        <div class="alert alert-success">
            {{session("deleted")}} successfully deleted
        </div>
        
    @endif --}}
    
    <h1 class="mb-4">Teachers Database</h1>

    <section class="teachers">
        <h2 class="text-primary mb-4">Teacher List</h2>

        
        <table class="table">
            <thead>
                <tr>
                    <th class="align-middle">Name</th>
                    <th class="align-middle">Age</th>
                    <th class="align-middle">Gender</th>
                    <th class="align-middle">Class</th>
                    <th class="align-middle"></th>
                    <th class="align-middle"></th>
                    <th class="align-middle">
                        <a class="btn btn-success align-middle" href="{{route("teachers.create")}}">New Teacher</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                <tr>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->age}}</td>
                    <td>{{$teacher->gender}}</td>
                    <td>{{$teacher->class}}</td>
                    <td>
                        {{-- <a class="btn btn-success" href="{{ route("teachers.show", $teacher->id) }}">SHOW</a> --}}
                        {{-- se non si passa un valore laravel pensa automaticamente di passare l'id --}}
                        {{-- <a class="btn btn-success" href="{{ route("teachers.show", $teacher) }}">SHOW</a> --}}
                        SHOW
                    </td>
                    <td>
                        {{-- <a class="btn btn-primary" href="{{ route("teachers.edit", $teacher) }}">EDIT</a> --}}
                        EDIT
                    </td>
                    <td>
                        {{-- <form action="{{ route("teachers.destroy", $teacher->id) }}" method="POST">
                            @csrf
                            @method("DELETE")

                            <input class="btn btn-danger" type="submit" value="DELETE">
                        </form> --}}
                        DELETE
                    </td>
                </tr>
                    
                @endforeach

            </tbody>

        </table>
    </section>

    
@endsection