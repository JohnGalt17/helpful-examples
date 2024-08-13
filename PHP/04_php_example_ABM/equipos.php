</br>
</br>
</br>

<?php

	// Parametros que necesito 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dataBase = "fulbito";

    $server = "http://localhost/pp2";

	// Creo la conexion
	$conn = new mysqli($servername, $username, $password, $dataBase);
	
	// Verifico la conexion
	if ($conn->connect_error) {
		die("Problema al conectar con la base de datos" . $conn->connect_error);
	} 

	// Armo la query
	$sql = "SELECT * FROM equipos";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// Muestro el resultado
		while($row = $result->fetch_assoc()) {
            // Create a URL with parameters
            $url = $server."/jugadores.php?id=" . $row["id"];
			echo "<a href='" . $url . "'> <div class='equipo'> id: " . $row["id"]. " - Nombre: <b>" . $row["nombre"]. "</b> <br> " . $row["descripcion"]."</div> </a>";
            echo "<br>";
            echo "<br>";
		}
	} else {
		echo "Sin resultados";
	}
	
	//	Cierro la conexion
	$conn->close();
?>