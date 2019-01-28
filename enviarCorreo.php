<?php
	header("Content-Type: text/html;charset=utf-8");

	$nombre = $_POST['nombre'];
	$email = $_POST['email']; 
	$comentario = $_POST['comentario'];

	require ("phpmailer/class.phpmailer.php"); 
		$mail = new PHPMailer; 
		$mail->Host = "mail.fija-todo.com";
		$mail->From = $email; 
		$mail->FromName = "Contacto Fija-Todo"; 
		$mail->Subject = "Contacto Sitio Web";
		$mail->addAddress("fija_todo@hotmail.com", "Fija-Todo");
		$mail->MsgHTML("Envía:  ".$nombre." <br/>".$comentario." <br/> Correo del contacto: ".$email." ");

	if($mail->Send()){
		echo '<script>alert("Se ha enviado exitosamente su mensaje. Responderemos a la brevedad a su correo")</script> ';
		echo "<script>location.href='https://www.fija-todo.com'</script>";
	}
	else{
		echo '<script>alert("No ha sido posible enviar su mensaje. Intentelo de nuevo.")</script> ';
		echo "<script>location.href='https://www.fija-todo.com'</script>";
	}
?>