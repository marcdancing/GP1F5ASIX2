<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Datos Avanzados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulario para introducir datos avanzados</h1>

    <form class="form-basic position-absolute top-50 start-50 translate-middle" method="POST" action="page_show_fileconfig.php">

        <div class="mb-3">
            <label for="authorative" class="form-label">authorative</label>
            <select class="form-control" id="ddns-update-style" name="ddns-update-style">
                <option value="ad-hoc">authorative</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="ddns-update-style" class="form-label">ddns-update-style</label>
            <select class="form-control" id="ddns-update-style" name="ddns-update-style">
                <option value="ad-hoc">ad-hoc</option>
                <option value="interim">interim</option>
                <option value="none" selected>none</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="authorative" class="form-label">Domain Name</label>
            <input type="text" pattern="[a-zA-Z0-9]+" minlength="5" maxlength="20" class="form-control" id="exampleInputEmail1" name="domain_name"aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="authorative" class="form-label">Servidor DNS</label>
            <input type="text" class="form-control" id="dns-server" name="dns-server" pattern="\b(?:\d{1,3}\.){3}\d{1,3}\b" placeholder="Ejemplo: 8.8.8.8" required>
        </div>
        <div class="mb-3">
            <label for="authorative" class="form-label">Puerta de enlace (Router)</label>
            <input type="text" class="form-control" id="gateway" name="gateway" pattern="\b(?:\d{1,3}\.){3}\d{1,3}\b" placeholder="Ejemplo: 192.168.1.1" required>
        </div>
        <div class="mb-3">
            <label for="authorative" class="form-label">default-lease-time</label>
            <input type="number" class="form-control" id="default-lease-time" name="default-lease-time" min="1" required>
        </div>
        <div class="mb-3">
            <label for="authorative" class="form-label">max-lease-time</label>
            <input type="number" class="form-control" id="max-lease-time" name="max-lease-time" min="1" required>
        </div>
        <div class="mb-3">
            <label for="authorative" class="form-label">Subnet</label>
            <input type="text" class="form-control" id="subnet" name="subnet" pattern="\b(?:\d{1,3}\.){3}\d{1,3}\b" placeholder="Ejemplo: 192.168.1.0" required>
        </div>
        <div class="mb-3">
            <label for="authorative" class="form-label">Netmask</label>
            <input type="text" class="form-control" id="netmask" name="netmask" pattern="\b(?:\d{1,3}\.){3}\d{1,3}\b" placeholder="Ejemplo: 255.255.255.0" required>
        </div>
        <div class="mb-3">
            <label for="authorative" class="form-label">Range</label>
                <div class="mb-3">
                    <input type="text" class="form-control" id="range-start" name="range-start" placeholder="Inicio del Rango: IP" required>
                    <input type="text" class="form-control" id="range-end" name="range-end" placeholder="Fin del Rango: IP" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="deny-unknown-clients" name="deny-unknown-clients">
                    <label class="form-check-label" for="deny-unknown-clients">Denegar asignación a clientes desconocidos</label>
                </div>
        </div>
        <div class="mb-3">
            <label for="client-name" class="form-label">Nombre del Cliente</label>
            <input type="text" class="form-control" id="client-name" name="client-name" required>
        </div>
        <div class="mb-3">
            <label for="mac-address" class="form-label">Dirección MAC</label>
            <input type="text" class="form-control" id="mac-address" name="mac-address" pattern="^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$" placeholder="Ejemplo: 00:11:22:33:44:55" required>
        </div>
        <div class="mb-3">
            <label for="ip-address" class="form-label">Dirección IP Fija</label>
            <input type="text" class="form-control" id="ip-address" name="ip-address" pattern="^(\d{1,3}\.){3}\d{1,3}$" placeholder="Ejemplo: 192.168.1.101" required>
        </div>
    
        <input type='hidden' name='data_type' value='advanced'>
        <input type='hidden' name='page' value='7'> <!-- Siguiente página después de avanzado es 6 -->
        <button class=" button1 btn btn-primary" type='submit'>Send</button>
    </form>
    <a href="page_data_type_selection.php"><button class="button2 btn btn-primary ">Anterior</button></a>
</body>
</html>
