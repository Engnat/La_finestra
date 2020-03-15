<?php
$remitente = $_POST['correoUser'];
$destinatario = 'reservas@lafinestrahotel.com';
$asunto = 'Mensaje solicitud información';
if (!$_POST){
?>

<?php
}else{

    $cuerpo = "Nombre: " . $_POST["nombreUser"] . "\r\n";
    $cuerpo .= "Email: " . $_POST["correoUser"] . "\r\n";
    $cuerpo .= "Telefono: " . $_POST["telefonoUser"] . "\r\n";
  	$cuerpo .= "Asunto: " . $_POST["mensajeUser"] . "\r\n";

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombreUser']." \" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);

    include 'confirmacion.html';
}
?>
