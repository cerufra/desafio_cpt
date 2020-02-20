<?php
	
	$HOST="host=localhost";
	$PORT="port=5432";
	$BD="dbname=postgres";
	$USER="user=cpt123";
	$PASS="password= cpt";
	$conexion = pg_connect ("$HOST $PORT $BD $USER $PASS");
	if(!$conexion){
		echo "Erro de conexão".pg_last_error;
	}else{
		echo "Funciona";
	}
?>