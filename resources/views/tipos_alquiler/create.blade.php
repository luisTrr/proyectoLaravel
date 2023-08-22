<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
    <h1>Crear Tipo de Alquiler</h1>
    <form action="{{ route('tipos-alquiler.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tipo">Tipo de Alquiler</label>
            <input type="text" id="tipo" name="tipo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
</body>
</html>