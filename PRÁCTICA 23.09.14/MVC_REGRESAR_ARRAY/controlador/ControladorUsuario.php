<?php
	
	/**
	* Controlador de la clase USUARIO
	*/
	class ControladorUsuario
	{
		private $modelo;
		
		function __construct()
		{
			require("modelo/ModeloUsuario.php");
			$this -> modelo = new ModeloUsuario();
		}

		function run()
		{
			switch ($_REQUEST["accion"]) {
				case 'insertar':
					$this -> insertar();
					break;
				case 'listar':
					print_r($this -> modelo -> listar());
					break;
				default:
					break;
			}
		}

		public function insertar()
		{
			
			$validoNombre = $this -> modelo ->validarTexto($nombre);
			$validoApellido = $this -> modelo ->validarTexto($apellido);
			$validoEmail = $this -> modelo ->validarEmail($email);
			$validoTelefono = $this -> modelo ->validarTelefono($telefono);
			
			if($validoNombre&&$validoApellido&&$validoEmail&&$validoTelefono){
				$this -> modelo -> insertar($nombre,$apellido,$telefono,$email);
			}
		}
	}
?>