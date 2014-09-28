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
			$idEmpleado = $_REQUEST["idEmpleado"];
			$nombre = $_REQUEST["nombre"];
			$apellidoPaterno = $_REQUEST["apellidoPaterno"];
			$apellidoMaterno = $_REQUEST["apellidoMaterno"];
			$fechaIngreso = $_REQUEST["fechaIngreso"];
			$calle  = $_REQUEST["calle"];
			$numeroExterior = $_REQUEST["numeroExterior"];
			$numeroInterior = $_REQUEST["numeroInterior"];
			$colonia = $_REQUEST["colonia"];
			$ciudad = $_REQUEST["ciudad"];
			$estado = $_REQUEST["estado"];
			$codigoPostal = $_REQUEST["codigoPostal"];
			$rfc = $_REQUEST["rfc"];
			$nss = $_REQUEST["nss"];
			$email = $_REQUEST["email"];
			$usuario = $_REQUEST["usuario"];
			$contrasena = $_REQUEST["contrasena"];
			$status = $_REQUEST["status"];
			$this -> modelo -> insertar($idEmpleado, $nombre, $apellidoPaterno, $apellidoMaterno, $fechaIngreso, $calle, $numeroExterior, $numeroInterior, $colonia, $ciudad, $estado,
			$codigoPostal, $rfc, $nss, $email, $usuario, $contrasena, $status);
			/*
			$validoNombre = $this -> modelo ->validarTexto($nombre);
			$validoApellido = $this -> modelo ->validarTexto($apellido);
			$validoEmail = $this -> modelo ->validarEmail($email);
			$validoTelefono = $this -> modelo ->validarTelefono($telefono);
			
			if($validoNombre&&$validoApellido&&$validoEmail&&$validoTelefono){
				$this -> modelo -> insertar($nombre,$apellido,$telefono,$email);
			}
			*/
		}
	}
?>