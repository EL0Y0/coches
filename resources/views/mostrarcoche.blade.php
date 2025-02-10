<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar coche</title>
</head>
<body>
    <h1>Coche con id {{$coche->id}}</h1>
    {{$coche->marca}}
    {{$coche->modelo}}
    {{$coche->precio}}€
    {{$coche->anio}}
    <a href="{{route('editarcoche', $coche->id)}}">Editar</a>
</body>
</html>