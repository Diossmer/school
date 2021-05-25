<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Nombre - Codigo_escolar</li>
    </ul>
    <ul>
    @foreach ($materia as $dato)
        <li>{{$dato->nombre}} - {{$dato->codigo_escolar}}</li>
    @endforeach
</ul>
</body>
</html>