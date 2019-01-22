<?php
	//Codigo en servidor web host ,         usuario,     contraseña,    base de datos
	/*$link =mysqli_connect("localhost","dasandap_adminsf","5IuddRZF_w1D","dasandap_sificoop");
		if($link){
			mysqli_select_db($link,"dasandap_sificoop");
		}*/
	$link =mysqli_connect("localhost","root","");
	if($link){
		mysqli_select_db($link,"ferreteria");
	}
?>