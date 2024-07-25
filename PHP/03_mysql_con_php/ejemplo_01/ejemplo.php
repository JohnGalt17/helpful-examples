<?php

	// Parametros que necesito 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dataBase = "curso";

	// Creo la conexion 
	$conn = new mysqli($servername, $username, $password, $dataBase);
	
	// Verifico la conexion
	if ($conn->connect_error) {
		die("Problema al conectar con la base de datos" . $conn->connect_error);
	} 

	// Armo la query
	$sql = "SELECT * FROM usuarios";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// Muestro el resultado
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " " . $row["apellido"]."  Email: ". $row['email']."<br>";
		}
	} else {
		echo "Sin resultados";
	}
	
	//	Cierro la conexion
	$conn->close();
?>