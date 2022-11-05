<?php 
	$mymail='ingramirez820@gmail.com';
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$tel = $_POST['telefono'];
	$asunto = $nombre. ' Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Teléfono: ".$tel."<br>Mensaje:".$_POST['mensaje'];


	if(mail($mymail, $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>