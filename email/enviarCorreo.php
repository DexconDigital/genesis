<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $email = $_POST['email'];
    $nombre = $_POST['name'];
    $mensaje = $_POST['message'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
}


$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //acceso
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Mensaje para enviar
    
    $mail->isHTML(true);
    //Cabecera
    $mail->setFrom('genesis@genesis.com', 'genesis@genesis.com');
    //destinos
    $mail->addAddress('williamlopez@gainmobiliariasas.com');
    

    $mail->Subject='Mensaje desde la pagina web de Inmobiliaria Genesis';
    $mail->Body = '<span>Hola, '.$nombre.' quiere recibir informacion con respeto a '.$asunto.' </span>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script>window.location.href='.././'</script>";

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
?>