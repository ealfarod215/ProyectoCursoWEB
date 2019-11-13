<?php
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$correo = $_POST['Correo'];
$numtelefono = $_POST['Telefono'];
$descripcion = $_POST['Descripcion'];
$para = 'edison.alfaro.duarte@gmail.com';
$titulo = 'Casa cultura Mora';

$msjCorreo = "Nombre: $nombre\n 
Apellido: $apellido\n 
E-Mail: $correo\n
Numero-Telefono: $numtelefono \n
Mensaje:\n $descripcion";

if ($_POST['Send']) {
    if (mail($para, $titulo, $msjCorreo)) {
        echo 'El mensaje se ha enviado';
    } else {
        echo 'Falló el envio';
    }
}
