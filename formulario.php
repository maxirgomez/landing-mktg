<?php 
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    $pais = $_POST['pais'];
    $mensaje = $_POST['mensaje'];

$cuerpo = <<<MAIL
    Nombre: $nombre
    Teléfono: $telefono
    Email: $email
    Empresa: $empresa
    País: $pais
    Mensaje: $mensaje
MAIL;

    $informacion_adicional = 
    'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'Bcc: developers@itps.one' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail( 'mgomez@itps.one', 'Consulta enviada desde marketing', $cuerpo, $informacion_adicional );

    header( "Location: http://marketing.itps.one/gracias.html" );
    
?>