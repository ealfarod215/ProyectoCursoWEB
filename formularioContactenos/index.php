<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$numtelefono = $_POST['numtelefono'];
$descripcion = $_POST['descripcion'];
$para = 'edison.alfaro.duarte@gmail.com';
$titulo = 'Casa cultura Mora';

$msjCorreo = "Nombre: $nombre\n 
Apellido: $apellido\n 
E-Mail: $correo\n
Numero-Telefono: $numtelefono \n
Mensaje:\n $descripcion";

if ($_POST['submit']) {
    if (mail($para, $titulo, $msjCorreo)) {
        echo 'El mensaje se ha enviado';
    } else {
        echo 'Falló el envio';
    }
}
