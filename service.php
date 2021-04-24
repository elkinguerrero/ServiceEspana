<?php
	error_reporting(E_ERROR);
	$conexion = mysqli_connect( "localhost", "administrador", "Baihplpeff*9","red_social_lectura");
	if (mysqli_connect_errno($conexion)) {
		echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
	}
	if (!mysqli_set_charset($conexion, "utf8")) {
		printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($enlace));
	}
	mysqli_set_charset( $conexion, 'utf8');

	$query = "";
	if($query == ""){
		$resultado = mysqli_query($conexion,$query);

		$data = array();
		while ($row = mysql_fetch_assoc($result)) {
			$data[] = $row;
		}
		echo json_encode($data);
	}else{
		//respuesta servicio
		echo '{"result";"Se inserto el usuario correctamente"}';
	}
	

	
	
?>