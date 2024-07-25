<?php
	$filas = 10;
	$columnas = 20;
?>
<html>
	<head>
		<title>Titulo del sitio web</title>
		
	</head>
	<body>

		<p>Hola</p>

		<table border="1">
			<?php
				$numerito = 1;
				echo gettype($numerito); // Deberia mostrar en pantalla "integer"

				echo "capoooooooo";	// con "echo" escupo cosas a la pantalla

				echo "<br>Tabla";
				for($t=1;$t<=$filas;$t++)
				{
					echo "<tr>";
					for($y=1;$y<=$columnas;$y++) 
					{
						echo "<td> $t - $y </td>";
					}
					echo "</tr>";
				}
			?>
		</table>

	</body>
</html>