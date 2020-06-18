@extends('layouts.main')

@section('main-content')

    {{-- if a classroom has been deleted display this alert --}}
    @if (session("deleted"))
        <div class="alert alert-success">
            {{session("deleted")}} successfully deleted
        </div>
        
    @endif
    
    <h1 class="mb-4">Classrooms Database</h1>

    <section class="classrooms">
        <h2 class="text-primary mb-4">Classroom List</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classrooms as $classroom)
                <tr>
                    <td>{{$classroom->id}}</td>
                    <td>{{$classroom->name}}</td>
                    <td>
                        {{-- <a class="btn btn-success" href="{{ route("classrooms.show", $classroom->id) }}">SHOW</a> --}}
                        {{-- se non si passa un valore laravel pensa automaticamente di passare l'id --}}
                        <a class="btn btn-success" href="{{ route("classrooms.show", $classroom) }}">SHOW</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route("classrooms.edit", $classroom) }}">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ route("classrooms.destroy", $classroom->id) }}" method="POST">
                            @csrf
                            @method("DELETE")

                            <input class="btn btn-danger" type="submit" value="DELETE">
                        </form>
                    </td>
                </tr>
                    
                @endforeach

            </tbody>

        </table>
    </section>

    
@endsection