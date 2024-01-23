<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <a href="index.php"><button type="submit" class=" button2 btn btn-primary ">Inici</button></a>
</body>
</html>

<?php

// Assignación de las variables en relación a los datos introducidos en los inputs del formulario básico. 

if (isset($_POST['host'])) {
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
    ddns-update-style  $ddns_update_style<br>
    option routers  $option_routers<br>
    default-lease-time $default_lease_time<br>
    max-lease-time $max_lease_time<br>
    subnet $subnet netmask $mask {<br>
    &emsp;&emsp;range $range<br>
    &emsp;&emsp;default-lease-time $default_lease_time<br>
    &emsp;&emsp;max-lease-time $max_lease_time<br>
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
    $option_routers = $_POST['option_routers'];
    $default_lease_time = $_POST['default_lease_time'];
    $max_lease_time = $_POST['max_lease_time'];
    $subnet = $_POST['subnet'];
    $mask = $_POST['mask']; 
    $range = $_POST['range'];
    $host = $_POST['host'];
    $hardware_ethernet = $_POST['hardware_ethernet'];
    $fixed_address = $_POST['fixed-address'];
    $fichero_dhcp_avanzado = "
    #dhcpd.conf <br>
    #<br>
    #<br>
    ddns-update-style  $ddns_update_style<br>
    option routers  $option_routers<br>
    default-lease-time $default_lease_time<br>
    max-lease-time $max_lease_time<br>
    subnet $subnet netmask $mask {<br>
    &emsp;&emsp;range $range<br>
    &emsp;&emsp;default-lease-time $default_lease_time<br>
    &emsp;&emsp;max-lease-time $max_lease_time<br>
    &emsp;host $host {
    &emsp;&emsp; hardware ethernet $hardware_ethernet
    &emsp;&emsp; fixed-address $fixed_address
    &emsp;}
    }
    <br>
    "; 
    echo "$fichero_dhcp_avanzado"; 

}


?>