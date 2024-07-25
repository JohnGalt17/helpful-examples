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
	$sql = "SELECT * FROM paises";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// Cargo el array paises 
		$i = 0;
		while($row = $result->fetch_assoc()) {
			$paises[$i]['id'] =  $row["id"];
			$paises[$i]['nombre'] =  $row["nombre"];
			$paises[$i]['capital'] =  $row["capital"];
			$i++;
		}
	} else {
		echo "Sin resultados";
	}
	
	//	Cierro la conexion
	$conn->close();
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
			<h1>PHP <br> Ahora no es mas HTML </h1>
		</div>
		<hr>
		<div id="contendor" class="contenedor">
				<div id="resultadoAlta">
					
				</div>
				
				<div id="contenedorAlta">
					<form id="formularioAlta" action="javascript:void(0);" role="form" id="alta" method="post" enctype="multipart/form-data">
						<label class="labelAlta"> Pais </label>
						<select name="pais" id="pais">
							<?php
								$cantPaises= count($paises);
								if( $cantPaises > 0 ){
									
									for($i=0; $i < $cantPaises; $i++){
										echo '<option value="'.$paises[$i]['id'].'" >'.$paises[$i]['nombre'].'</option>';
									}
									
								}else{
									echo '<option value="0">No hay opciones</option>';
								}
							?>
						</select>
						<br>
						<br>

						<label class="labelAlta">	Nombre </label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" onKeyPress="return validarLetras(event);"/>
						<br>
						<br>
						<label class="labelAlta">	Apellido </label>
						<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el apellido"/> 
						<br>
						<br>
						<label class="labelAlta">	DNI </label>
						<input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese el dni"/> 
						<br>
						<br>
						<label class="labelAlta">	Sexo </label>
						<br>
						<input type="radio" name="sexo" value="masculino"> Masculino<br>
						<input type="radio" name="sexo" value="femenino"> Femenino<br>
						<br>
						<br>
						<label class="labelAlta">	Curso que quiero hacer: </label>
						<br>
						<select name="curso" id="curso">
							<option value="php">PHP</option>
							<option value="java">JAVA</option>
							<option value="net">NET</option>
							<option value="otro">Otro</option>
							
						</select>
						<br>
						<br>
						<label class="labelAlta">	Motivo del curso: </label>
						<br>
						<textarea name="motivo" id="motivo" rows="10" cols="50" maxlength="50"></textarea>
						<br>
						<br>
						<br>
						<button type="submit" id="enviar" onClick="mostrarDatos();"> Mostrar </button>
						
					</form>
				</div>
				
		</div>

	</body>
	
</html>

<script type="text/javascript">

	

	// Funcion para enviar los datos
	function mostrarDatos(){
		
		var nombre = $('#nombre').val();
		var apellido = $('#apellido').val();
		var dni = $('#dni').val();
		var sexo = $('input[name=sexo]:checked').val();
		var curso = $('#curso').val();
		var motivo = $('#motivo').val();
		var pais = $('#pais option:selected').text();
		
	
		var string = "";
		string += "<div>";
		string += "<label> Pais: " + pais + " </label><br>";
		string += "<label> Nombre: " + nombre + " </label><br>";
		string += "<label> Apellido: " + apellido + " </label><br>";
		string += "<label> DNI: " + dni + " </label><br>";
		string += "<label> Sexo: " + sexo + " </label><br>";
		string += "<label> Curso: " + curso + " </label><br>";
		string += "<label> Motivo: </label> <br> <p>" + motivo + " </p><br>";
		string += "</div>";
		
		$('#resultadoAlta').html( "" );
		$('#resultadoAlta').html( string );
		
		console.log("El pais seleccionado es: " + pais);
		console.log("El nombre ingresado es: " + nombre);
		console.log("El apellido ingresado es: " + apellido);
		console.log("El dni ingresado es: " + dni);
		console.log("El sexo seleccionado es: " + sexo);
		console.log("El curso seleccionado es: " + curso);
		console.log("El motivo ingresado es: " + motivo);
	}
	
		// Obtengo el pais seleccionado
		var idPais = $(this).val();
		
		// Flag para la primera vez que se encuentra una provincia del pais
		var flag = 0;
		console.log("Elegi:" + idPais );
		
		// Vacio las opciones
		$("#provincia").empty();
		
		// Agrego la primera 
		$('#provincia').append( '<option value="0"> No hay opciones </option>' );
		
		if( idPais <= 0 ){
			return;
		}
		
		
		// Recorro el array
		for(var i=0; i < provincia.length; i++){
			console.log(provincia[i]);
			console.log("PARTE 1: "+ provincia[i][0]);
			console.log("PARTE 2: "+ provincia[i][1]);
			console.log("PARTE 3: "+ provincia[i][2]);
			
			// Valido que sea el id del pais
			if( provincia[i][0] == idPais ){
				// Si es la primera vez que entra flag = 0
				if ( flag == 0 ){
					$('#provincia').append( '<option value="-1"> Seleccione una provincia </option>' );
					flag = 1;
				}
				
				var stringOpcion = "";
				// Armo la opcion 
				stringOpcion += '<option value="' + provincia[i][1] + '"> ' + provincia[i][2] + '</option>';
				// Cargo la opcion al select
				$('#provincia').append( stringOpcion );
			}
		}
		
		// Cargue el array
		$("#provincia option[value='0']").remove();
		
		
	} );
	// Funcion para validar que solo ingresen letras en la busqueda 
	function validarLetras(){
		// valido que sea solo letra lo que ingresa
		if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122)){
			event.returnValue = false;
		}
	}
	
	
	$('#apellido').keyup( function(){
		var texto = $(this).val();
		
		if( validarLetrasPorTexto( texto ) ){
			$('#apellido').removeClass('error');
			$('#apellido').addClass('correcto');
			console.log("hay solo letras!");
		}else{
			$('#apellido').removeClass('correcto');
			$('#apellido').addClass('error');
			console.log("Hay errores!!");
		}
		
	});
	
	$('#motivo').keyup( function(){
		var texto = $(this).val();
		var regexp=/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/;
		if( texto.match(regexp)){
			$('#motivo').removeClass('error');
			$('#motivo').addClass('correcto');
		}else{
			$('#motivo').removeClass('correcto');
			$('#motivo').addClass('error');
		}
		
	});
	
	
	// Funcion para validar que el texto que se recibe sean solo letras
	function validarLetrasPorTexto(texto){
		for(var i=0; i < texto.length; i++){
			var codigoCaracter = texto.charCodeAt(i);
			
			// valido que sea solo letra lo que ingresa
			if ((codigoCaracter != 32) && (codigoCaracter < 65) || (codigoCaracter > 90) && (codigoCaracter < 97) || (codigoCaracter > 122)){
				return false;
			}
		}
		return true;
	}
	
	
	
</script>