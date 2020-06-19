<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud School Database System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav-brand">Boolean</div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route("home")}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("classrooms.index")}}">Classrooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("classrooms.create")}}">Add classroom</a>
                </li>

            </ul>
        </nav>
    </header>