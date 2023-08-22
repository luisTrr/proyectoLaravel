<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
    <h1>Lista de Alquileres</h1>
    <a href="{{ route('alquileres.create') }}" class="btn btn-primary">Crear Alquiler</a>
    <ul>
        @foreach ($alquileres as $alquiler)
            <li>{{ $alquiler->titulo }} - {{ $alquiler->direccion }} (Precio: {{ $alquiler->precio }})</li>
        @endforeach
    </ul>
    </div>
</body>
</html>