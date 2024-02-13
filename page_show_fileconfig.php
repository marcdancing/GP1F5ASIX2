<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <a href="index.php"><button type="submit" class=" button2 btn btn-primary ">Inici</button></a>
</body>
</html>

<?php

// Assignación de las variables en relación a los datos introducidos en los inputs del formulario básico. 

if (isset($_POST['client-name'])) {
    mostrarFicheroAvanzado();
} else {
    mostrarFicheroBasico();
}

function mostrarFicheroBasico()
{
    // Recoger los datos del formulario

    $authorative = $_POST['authorative'];
    $ddns_update_style = $_POST['ddns_update_style'];
    $domain_name = $_POST['domain_name'];
    $domain_name_servers = $_POST['domain_name_servers'];
    $option_routers = $_POST['option_routers'];
    $default_lease_time = $_POST['default_lease_time'];
    $max_lease_time = $_POST['max_lease_time'];
    $subnet = $_POST['subnet'];
    $mask = $_POST['mask']; 
    $range = $_POST['range'];
    $fichero_dhcp = "
    <div class='file'>
    #dhcpd.conf <br>
    #<br>
    #<br>
    ddns-update-style  $ddns_update_style;<br>
    option routers  $option_routers;<br>
    default-lease-time $default_lease_time;<br>
    max-lease-time $max_lease_time;<br>
    option domain-name $domain_name;
    subnet $subnet netmask $mask {<br>
    &emsp;&emsp;range $range;<br>
    &emsp;&emsp;default-lease-time $default_lease_time;<br>
    &emsp;&emsp;max-lease-time $max_lease_time;<br>
    }<br>
    </div>
    "; 
    echo "<h1>El fichero dhcpd.conf tendría la siguiente estructura</h1>"; 
    echo "$fichero_dhcp"; 


}

function mostrarFicheroAvanzado()
{
    $authorative = $_POST['authorative'];
    $ddns_update_style = $_POST['ddns_update_style'];
    $domain_name = $_POST['domain_name'];
    $domain_name_servers = $_POST['domain_name_servers'];
    $option_routers = $_POST['gateway'];
    $default_lease_time = $_POST['default-lease-time'];
    $max_lease_time = $_POST['max-lease-time'];
    $subnet = $_POST['subnet'];
    $mask = $_POST['mask']; 
    $rangeInicial = $_POST['range-start'];
    $rangeFinal = $_POST['range-end']; 
    $host = $_POST['client-name'];
    $hardware_ethernet = $_POST['mac-address'];
    $fixed_address = $_POST['ip-address'];
    $type = $_POST['type']; 
    $fichero_dhcp_avanzado = "
    <div class='file'>
    #dhcpd.conf <br>
    #<br>
    #<br>
    ddns-update-style  $ddns_update_style;<br>
    option routers  $option_routers;<br>
    default-lease-time $default_lease_time;<br>
    max-lease-time $max_lease_time;<br>
    option domain-name $domain_name;<br>
    subnet $subnet netmask $mask; {<br>
    &emsp;&emsp;range $rangeInicial $rangeFinal;<br>
    &emsp;&emsp;default-lease-time $default_lease_time;<br>
    &emsp;&emsp;max-lease-time $max_lease_time;<br><br>
    &emsp;host $host; {<br>
    &emsp;&emsp; hardware ethernet $hardware_ethernet;<br>
    &emsp;&emsp; fixed-address $fixed_address;<br>
    &emsp;&emsp; $type unknown-clients;
    &emsp;}<br>
    }
    <br>
    </div>
    "; 
    echo "$fichero_dhcp_avanzado"; 

}

// <input type="checkbox" name="demoCheckBox" value="1">
/*
if ($_POST['demoCheckBox']) {
   // Checkbox is checked
   // Perform actions or logic for checked checkbox
} else {
   // Checkbox is not checked
   // Perform actions or logic for unchecked checkbox
}
*/
?>