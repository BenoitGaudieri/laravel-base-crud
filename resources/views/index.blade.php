<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB Studenti</title>
</head>
<body>
    @foreach ($students as $student)
    <h1>{{$student->name}}</h1>
    <p>{{$student->description}}</p>
        
    @endforeach
</body>
</html>