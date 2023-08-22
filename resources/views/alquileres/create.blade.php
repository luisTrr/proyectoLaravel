<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
    <h1>Crear Alquiler</h1>
    <form action="{{ route('alquileres.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="usuario_id">Usuario</label>
            <select id="usuario_id" name="usuario_id" class="form-control" required>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tipo_alquiler_id">Tipo de Alquiler</label>
            <select id="tipo_alquiler_id" name="tipo_alquiler_id" class="form-control" required>
                @foreach ($tiposAlquiler as $tipoAlquiler)
                    <option value="{{ $tipoAlquiler->id }}">{{ $tipoAlquiler->tipo }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="recurso_alquiler_id">Recurso de Alquiler</label>
            <select id="recurso_alquiler_id" name="recurso_alquiler_id" class="form-control" required>
                @foreach ($recursosAlquiler as $recursoAlquiler)
                    <option value="{{ $recursoAlquiler->id }}">Wifi: {{ $recursoAlquiler->wifi ? 'Sí' : 'No' }} - Agua Caliente: {{ $recursoAlquiler->agua_caliente ? 'Sí' : 'No' }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
</body>
</html>