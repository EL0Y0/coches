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
        <input type="number" name="precio" placeholder="Filtra por precio maximo">
        <input type="number" name="anio" placeholder="Filtra por anio minimo">

        <input type="submit" value="Filtrar">
    </form>
    <ul>
        @foreach ($coches as $coche)
            <li><a href="{{route('mostrarcoche', $coche->id)}}">{{$coche->marca}}</a> - {{$coche->modelo}}</li>
            <form action="{{route('eliminarcoche', $coche->id)}}" method="POST" onsubmit="return confirm('Seguro segurete?')">
                @csrf
                @method('DELETE')
                <button>Eliminar</button>
            </form>
        @endforeach
    </ul>
    <a href="{{route('crearcoche')}}">Añadir coche-</a>
</body>
</html>