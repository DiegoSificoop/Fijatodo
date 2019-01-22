<?php
	session_start(); 
	unset($_SESSION['sesionA']); 
	session_destroy();
	//header("Location: https://www.dasandapps.com/SIFICOOP/"); 
	header("Location: http://localhost:8080/FERRETERIA"); 
	exit; 
?>