<?php
	header("Content-Type: text/html;charset=utf-8");
	require("conexiones/conexion.php");
	 
	$id =  $_POST['id'];
	$contrasena = md5($_POST['contrasena']);

	//$veri = "si";

	$sql=mysqli_query($link,"SELECT id_ad, contrad FROM administrador WHERE id_ad='$id'");
	if($f=mysqli_fetch_array($sql)){
		if($contrasena==$f['contrad']){
			session_start();
			$_SESSION['sesionA'] = $id;
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script>';
			echo "<script>location.href='principal.php'</script>";	
		}
		else{
			echo '<script>alert("Numero o contraseña incorrectos.")</script> ';
			echo "<script>location.href='redirect.php'</script>";
		} 
	}
?>