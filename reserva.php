<?php
$remitente = $_POST['correoUser'];
$destinatario = 'engnatruve@gmail.com'; // en esta línea va el mail del destinatario.
$asunto = 'Mensaje Reserva habitacion'; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{

    $cuerpo = "Nombre: " . $_POST["nombreUser"] . "\r\n";
    $cuerpo .= "Email: " . $_POST["correoUser"] . "\r\n";
    $cuerpo .= "Telefono: " . $_POST["telefonoUser"] . "\r\n";
  	$cuerpo .= "Mensaje Reserva: " . $_POST["mensajeUser"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo.
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombreUser']." \" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);

    include 'confirmacion.html'; //se debe crear un html que confirma el envío
}
?>
