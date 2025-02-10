<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir coche</title>
</head>

<body>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    <form method="POST" action="{{route('guardarcoche')}}">
        @csrf
        <input type="text" name="marca" value="{{old('marca')}}" placeholder="Marca">
        <!-- @error('marca')
            <span>{{ $message }}</span>
        @enderror -->
        <textarea type="text" name="modelo" placeholder="Modelo"></textarea>
        <!-- @error('modelo')
            <span>{{ $message }}</span>
        @enderror -->
        <input type="number" name="precio" id="precio" value="{{old('precio')}}" placeholder="Precio">
        <input type="number" name="anio" id="anio" value="{{old('anio')}}" placeholder="Año">
        <input type="submit" value="Guardar">
    </form>
</body>

</html>