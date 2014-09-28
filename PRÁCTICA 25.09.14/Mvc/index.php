<?php
	
	$controlador;
	switch ($_GET['control']) {
		case 'usuario':
			require("controlador/ControladorUsuario.php");
			$controlador = new ControladorUsuario();
			break;
		
		case 'vehiculo':
			break;

		default:
			break;
	}

	$controlador -> run();
?>