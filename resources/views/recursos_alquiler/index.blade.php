<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
    <h1>Lista de Recursos de Alquiler</h1>
    <a href="{{ route('recursos-alquiler.create') }}" class="btn btn-primary">Crear Recurso de Alquiler</a>
    <ul>
        @foreach ($recursosAlquiler as $recursoAlquiler)
            <li>Wifi: {{ $recursoAlquiler->wifi ? 'Sí' : 'No' }} - Agua Caliente: {{ $recursoAlquiler->agua_caliente ? 'Sí' : 'No' }}</li>
        @endforeach
    </ul>
    </div>
</body>
</html>