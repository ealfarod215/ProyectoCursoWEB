<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/Users/Edison/vendor/phpmailer/phpmailer/src/Exception.php';
require 'C:/Users/Edison/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'C:/Users/Edison/vendor/phpmailer/phpmailer/src/SMTP.php';


function enviarEmail()
{
    if (
        isset($_POST['Nombre']) && isset($_POST['Apellido']) && isset($_POST['Correo'])
        && isset($_POST['Telefono']) && isset($_POST['Descripcion'])
    ) {
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $correo = $_POST['Correo'];
        $numtelefono = $_POST['Telefono'];
        $descripcion = $_POST['Descripcion'];

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 2;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.office365.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'edisonpollociego@hotmail.com';                     // SMTP username
            $mail->Password   = 'lacasa123';                               // SMTP password
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('edisonpollociego@hotmail.com', 'Mailer');
            $mail->addAddress('edisonpollociego@gmail.com', 'Mailer');     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Correo de Contacto';
            $mail->Body    = 'Nombre: ' . $nombre . '<br/>Apellido: ' . $apellido . '<br/>Correo: ' . $correo . '<br/>Telefono: ' . $numtelefono . '<br/>Descripcion: ' . $descripcion . '<br/>';
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        return;
    }
}

enviarEmail();

