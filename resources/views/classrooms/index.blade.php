@extends('layouts.main')

@section('main-content')
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
                    <td>UPDATE</td>
                    <td>DELETE</td>
                </tr>
                    
                @endforeach

            </tbody>

        </table>
    </section>

    
@endsection