<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos Básicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="contentBasicForm">
        <h3>Formulario para introducir datos básicos</h3>
        <!-- position-absolute top-50 start-50 translate-middle -->
        <form class="formulari-basic form-basic" method="POST" action="page_show_fileconfig.php">
            <div class="mb-3">
                <label for="authorative" class="form-label">authoritative</label>
                <input type="text" class="form-control" name="authorative" required>
            </div>
            <div class="mb-3">
                <label for="authorative" class="form-label">ddns-update-style</label>
                <input type="text" class="form-control" name="ddns_update_style" required>
            </div>
            <div class="mb-3">
                <label for="authorative" class="form-label">domain-name</label>
                <input type="text" class="form-control" name="domain_name" required>
            </div>

            <div class="mb-3">
                <label for="authorative" class="form-label">domain-name-severs</label>
                <input type="text" class="form-control" name="domain_name_servers" required>
            </div>

            <div class="mb-3">
                <label for="authorative" class="form-label">opttion routers</label>
                <input type="text" class="form-control" name="option_routers" required>
            </div>

            <div class="mb-4">
                <label for="authorative" class="form-label">default-lease-time</label>
                <input type="text" class="form-control" name="default_lease_time" required>
            </div>

            <div class="mb-4">
                <label for="authorative" class="form-label">max-lease-time</label>
                <input type="text" class="form-control" name="max_lease_time" required>
            </div>

            <div class="mb-4">
                <label for="authorative" class="form-label">Subnet  </label>
                <input type="text" class="form-control" name="subnet" required>
            </div>

            <div class="mb-4">
                <label for="authorative" class="form-label">Mask</label>
                <input type="text" class="form-control" name="mask" required>
            </div>

            <div class="mb-4">
                <label for="authorative" class="form-label">Rage</label>
                <input type="text" class="form-control" name="range" required>
            </div>
            <button type="submit" class="btn btn-primary ">Send</button>
        </form>
        <a href="page_data_type_selection.php"><button type="submit" class="btn btn-primary ">Anterior</button></a>
    </div>
    
    <!-- <a href="index.php">Atras</a> . <a href="page_basic_data_form.php">Siguiente</a> -->
    <!-- <form method='post' action='process.php'>
        <label for="authoritative">Authoritative</label>
        <input type="text" name="authoritative" pattern="[0-1]" title="Ingrese 0 o 1" placeholder="Ejemplo: 1"
            required><br>
        <label for="authoritative">ddns-update-style</label>
        <input type="text" name="ddns-update-style" pattern="[0-1]" title="Ingrese 0 o 1" placeholder="Ejemplo: 1"
            required><br>
        <label for="authoritative">domain-name</label>
        <input type="text" name="domain-name" pattern="[0-1]" title="Ingrese 0 o 1" placeholder="Ejemplo: 1"
            required><br>
        <label for="authoritative">domain-name-severs</label>
        <input type="text" name="domain-name-severs" pattern="[0-1]" title="Ingrese 0 o 1" placeholder="Ejemplo: 1"
            required><br>
        <label for="authoritative">opttion routers</label>
        <input type="text" name=" opttion routers" pattern="[0-1]" title="Ingrese 0 o 1" placeholder="Ejemplo: 1"
            required><br>
        <label for="authoritative">default-lease-time</label>
        <input type="text" name="default-lease-time" pattern="[0-1]" title="Ingrese 0 o 1" placeholder="Ejemplo: 1"
            required><br>
        <label for="authoritative">max-lease-time</label>
        <input type="text" name="max-lease-time" pattern="[0-1]" title="Ingrese 0 o 1" placeholder="Ejemplo: 1"
            required><br>
        <label for="authoritative">subnet i netmask</label>
        <input type="text" name="subnet i netmask" pattern="[0-1]" title="Ingrese 0 o 1" placeholder="Ejemplo: 1"
            required><br>
        <button type='submit'>Siguiente página</button>
    </form> -->
</body>

</html>