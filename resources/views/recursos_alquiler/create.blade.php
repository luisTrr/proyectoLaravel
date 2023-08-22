<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
    <h1>Crear Recurso de Alquiler</h1>
    <form action="{{ route('recursos-alquiler.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="wifi">¿Tiene Wifi?</label>
            <select id="wifi" name="wifi" class="form-control" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="agua_caliente">¿Tiene Agua Caliente?</label>
            <select id="agua_caliente" name="agua_caliente" class="form-control" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
</body>
</html>