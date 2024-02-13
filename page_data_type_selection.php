<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Selección de Tipo de Datos</title>
</head>
<body>
    <h1>Seleccione el tipo de datos</h1>
    <form method="post" action="process.php">
        <label for="data_type">Seleccione el tipo de datos:</label>
        <select name="data_type" required>
            <option value="basic">Datos Básicos</option>
            <option value="advanced">Datos Avanzados</option>
        </select><br>
        <button class="btn btn-primary"type="submit">Aceptar</button>
    </form>
</body>
</html>
