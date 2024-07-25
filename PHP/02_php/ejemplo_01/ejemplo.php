<?php
	echo "Bienvenidos! Esto es un ejemplo de PHP";
	echo "<br><br><br>";



	$nombre = "Juan Carlos Batman";
	$edad = 47;
	$color = "Azul";
	$casado = TRUE;

	echo "Mi nombre es " . $nombre;
	echo "<br>";
	echo "Tengo $edad años de edad.";
	echo "<br>";
	echo 'Mi color favorito es el $color';
	echo '<br>';

	if ($casado == TRUE) {
		echo "Actualmente estoy casado.";
	} else {
		echo "Soy soltero.";
	}
	echo "<br><br>";

	echo "Mi versión de PHP instalada es: " . phpversion();
	echo "<br><br><br>";



	$cadena = "Estoy";
	$cadena .= " viviendo en";
	$cadena .= " la ciudad de";
	$cadena .= " Buenos Aires.";

	echo $cadena;
	echo "<br>Esa última oración tiene " . strlen($cadena) . " caracteres de longitud y " . str_word_count($cadena) . " palabras.";
	echo "<br><br><br>";



	$frutas = array("peras", "manzanas", "naranjas");	// Array por índice

	echo "Mis frutas favoritas son:";
	foreach ($frutas as $fruta) {
		echo " " . $fruta;
	}

	echo "<br>";
	echo "Pero la que más me gusta de todas es la " . substr($frutas[0], 0, -1) . ".";	// Con la función substr elimino el último caracter de la fruta
	echo "<br>";

	$frutas[] = "mandarinas";
	echo "Ahora que me acuerdo, también me gustan mucho las " . $frutas[3];
	echo "<br><br>";
	echo "En total, tengo " . count($frutas) . " frutas favoritas.";

	echo "<br><br><br>";


	$hijos = array("Hugo" => 18, "Paco" => 20, "Luis" => 17);	// Array asociativo

	echo "Tengo " . count($hijos) . " hijos.";
	echo "<br><br>";
	echo "Hugo tiene " . $hijos["Hugo"] . " años de edad<br>";
	echo "Paco tiene " . $hijos["Paco"] . " años.<br>";
	echo "Luis tiene " . $hijos["Luis"] . ".";

	echo "<br><br>";

	ksort($hijos);

	echo "Ordenados alfabéticamente, son:";
	echo "<br>";
	foreach($hijos as $hijo => $edad) {
		echo $hijo . "<br>";
	}