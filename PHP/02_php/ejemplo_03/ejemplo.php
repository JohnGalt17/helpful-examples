<?php
	$datos['nombre'] = 'Juan Roman Riquelme';
	$datos['email'] = 'jrriquelme@gylgroup.com';
	$datos['lugarNacimiento'] = 'San Fernando, Buenos Aires';
	$datos['fechaNacimiento'] = '24 de junio de 1978';
	$datos['edad'] = '38 años';
	$datos['nacionalidad'] = 'Argentino';
	$datos['altura'] = '1,82 m';
	$datos['peso'] = '79 kg (174 lb)';
	
	$datos['imagen'] = 'http://static.minutouno.com/adjuntos/150/imagenes/011/231/0011231953.jpg';
	
	$datos['logros'][0]['nombre'] = 'Goles'; 
	$datos['logros'][0]['descripcion'] = '174 goles'; 
	$datos['logros'][0]['fecha'] = '24/06/2000'; 
	
	$datos['logros'][1]['nombre'] = 'Asistencias'; 
	$datos['logros'][1]['descripcion'] = ' 247 pases de gol (asistencias)';
	$datos['logros'][1]['fecha'] = '25/06/2000'; 	
	
	$datos['logros'][2]['nombre'] = 'Clubes'; 
	$datos['logros'][2]['descripcion'] = ' Boca Juniors, Barcelona, Villarreal, Argentino Juniors';
	$datos['logros'][2]['fecha'] = '26/06/2000'; 	
	
	$datos['logros'][3]['nombre'] = 'Copas Internacionales'; 
	$datos['logros'][3]['descripcion'] = '3 Seleccion Argentina - 5 Boca Juniors - 2 Villarreal ';
	$datos['logros'][3]['fecha'] = '27/06/2000'; 	
	
	$datos['logros'][4]['nombre'] = 'Campeonatos Nacionales'; 
	$datos['logros'][4]['descripcion'] = '6 Boca Juniors';
	$datos['logros'][4]['fecha'] = '28/06/2000'; 	
	
	
?>


<html>
	<head>
		<title>	Ej PHP </title>
		
		<!-- Esta es la forma de levantar archivos de CSS -->
		<link rel="stylesheet" href="estilos.css">
		
		<!-- Esta es la forma de levantar archivos JS -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		
	</head>
	
	<body>
		<div id="titulo" class="titulo">
			<h1>	PHP 	
			<br>
			<?php	echo $datos['nombre']; ?>
			</h1>
		</div>
		<hr>
		<div id="contendor" class="contenedor">
			<div id="resultadoAlta">
				<span> Nombre:  <?php echo $datos['nombre']; ?> </span>
				<br>
				<br>
				<span> Nacimiento:  <?php echo $datos['lugarNacimiento'].' - '.$datos['fechaNacimiento']; ?> </span>
				<br>
				<br>
				<span> Edad:  <?php echo $datos['edad']; ?> </span>
				<br>
				<br>
				<span> Nacionalidad:  <?php echo $datos['nacionalidad']; ?> </span>
				<br>
				<br>
				<span> Altura:  <?php echo $datos['altura']; ?> </span>
				<br>
				<br>
				<span> Peso:  <?php echo $datos['peso']; ?> </span>
				<br>
				<br>
			</div>
			
			<div id="contenedorAlta">
				<div>
					<img src="<?php echo $datos['imagen']; ?>">
				</div>
				
				<div id="logros">
					<br>
					<br>
					<br>
					<?php
						$cantLogros = count($datos['logros']);
						
						if( $cantLogros > 0 ){
							echo '<table>';
							echo '	<tr>
										<td>	<strong>	Titulo	</strong>	</td>
										<td>	<strong>	Descripcion	</strong>	</td>
										<td>	<strong>	Fecha	</strong>	</td>
									</tr>';
									
									
							for($i=0; $i < $cantLogros; $i++){
								echo '	<tr> ';
								echo '		<td>'.$datos['logros'][$i]['nombre'].'</td>';
								echo '		<td>'.$datos['logros'][$i]['descripcion'].'</td>';
								echo '		<td>'.$datos['logros'][$i]['fecha'].'</td>';
								echo '	</tr> ';
							}
							
							echo '</table>';
						}else{
							echo 'No hay datos';
						}
					?>
				</div>
			</div>
				
		</div>

	</body>
	
</html>
