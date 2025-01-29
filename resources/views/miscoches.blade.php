<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis coches</title>
</head>
<body>
<h1>Todos mis coches</h1>
    {{session('success')}}
    <form action="{{route('listacoches')}}" method="GET">
        <input type="text" name="nombre" placeholder="Filtra por nombre">
        <input type="submit" value="Filtrar">
    </form>
    <ul>
        @foreach ($coches as $coche)
            <li><a href="{{route('mostrarcoche', $coche->id)}}">{{$coche->marca}}</a> - {{$coche->modelo}}</li>
            <a href="{{route('eliminarcoche', $coche->id)}}">Eliminar</a>        
        @endforeach
    </ul>
    <a href="{{route('crearcoche')}}">Añadir coche-</a>
</body>
</html>