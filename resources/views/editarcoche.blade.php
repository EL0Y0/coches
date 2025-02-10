<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar coche</title>
</head>
<body>
<ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    <form method="POST" action="{{route('actualizarcoche', $coche->id)}}">
        @csrf
        @method('PUT')
        
        <input type="text" name="marca" value="{{old('marca',$coche->marca)}}" placeholder="marca">
        <!-- @error('marca')
            <span>{{ $message }}</span>
        @enderror -->
        <textarea type="text" name="modelo" value="{{old('modelo',$coche->modelo)}}" placeholder="modelo"></textarea>
        <!-- @error('modelo')
            <span>{{ $message }}</span>
        @enderror -->
        <input type="submit" value="Guardar">
    </form>
</body>
</html>