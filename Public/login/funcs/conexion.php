<?php
	
	$mysqli=new mysqli("us-cdbr-east-06.cleardb.net","b91a369a3679a9","a158ff82","heroku_73f451983320285"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>