<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Coche</title>
</head>
<body>
    <h1>Eliminar Coche</h1>
    <p>¿Estás seguro de que deseas eliminar este coche?</p>
    <form action="{{ route('coches.destroy', $coche->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
        <a href="{{ route('listacoches') }}">Cancelar</a>
    </form>
</body>
</html>
