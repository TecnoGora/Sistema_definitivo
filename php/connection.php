<?php
	$host = 'localhost';
	$dbname = 'postgres';
	$usrname = 'postgres';
	$psswd = '3rud1c10n';

	try {
		$conn = new PDO("pgsql:host=$host;
								dbname=$dbname;
								user=$usrname;
								password=$psswd");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Conexion exitosa a la base de datos";
	} catch(PDOException $e){
		echo "Error de Conexion: " . $e->getMessage();
	}

?>