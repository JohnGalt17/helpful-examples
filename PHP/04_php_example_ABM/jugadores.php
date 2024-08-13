<?php
// Recibo el id del equipo
$id = $_GET['id'];

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
$sql = "    SELECT j.id, j.nombre, j.apodo
            FROM equipos_jugadores ej 
            RIGHT JOIN jugadores j
            ON ej.jugador_id = j.id
            WHERE ej.equipo_id = ".$id."
                AND ej.fecha_fin IS NULL";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Muestro el resultado
    while($row = $result->fetch_assoc()) {
        // Create a URL with parameters
        $url = $server."/jugador.php?id=" . $row["id"];
        echo "<a href='" . $url . "'> <div class='jugador'> id: " . $row["id"]. " - Nombre: <b>" . $row["nombre"]. "</b> <br> " . $row["apodo"]."</div> </a>";
        echo "<br>";
        echo "<br>";
    }
} else {
    echo "Sin resultados";
}

//	Cierro la conexion
$conn->close();
?>