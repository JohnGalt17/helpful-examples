<?php
	
	$fechaHoy = new DateTime ('now');
	$fechaDeOtroDia = DateTime::createFromFormat("Y-m-d", $fechaDeAlgoMySQL );
	
	//con el formato que se te cante
	echo $fechaHoy->format('Y-m-d');  
	echo $fechaDeOtroDia->format('d/m/Y');
	
	//diferencia de fechas
	$diasDiferencia = date_diff($fechaHoy, $fechaDeOtroDia );
	echo $diasDiferencia->format('%R%a');	//formatea la diferencia como se te cante el O.G.T
	
	//validacion de la fecha
	$fechaValida = DateTime::createFromFormat('d/m/Y', $fechaAValidarPorEjemploIngresadaDesdeLaView );

	//Verifico si el Objeto fecha se creo bien comparando con != false y ademas si es la fecha ingresada es valida formateando el objeto con el formato original y comparando.
	//NOTA:
	//  createFromFormat() si la fecha no es valida crea una fecha valida pero desplazada
	//  Ej: 1978-01-32 crea objeto con fecha 1978-02-01
	
	if ( $fechaValida != FALSE && $fechaValida->format('d/m/Y') == $fechaAValidarPorEjemploIngresadaDesdeLaView )
		echo "OK";
	else
		echo "Mal"
	
