<?php
class Usuario
{
	private $idEmpleado;
		private $nombre;
		private $apellidoPaterno;
		private $apellidoMaterno;
		private $fechaIngreso;
		private $calle;
		private $numeroExterior;
		private $numeroInterior;
		private $colonia;
		private $ciudad;
		private $estado;
		private $codigoPostal;
		private $rfc;
		private $nss;
		private $email;
		private $usuario;
		private $contrasena;
		private $status;

		public function __construct($idEmpleado,$nombre, $apellidoPaterno, $apellidoMaterno, $fechaIngreso, $calle, $numeroExterior, $numeroInterior, $colonia, $ciudad, $estado,
			$codigoPostal, $rfc, $nss, $email, $usuario, $contrasena, $status){
		
			$this -> idEmpleado = $idEmpleado;
			$this -> nombre = $nombre;
			$this -> apellidoPaterno = $apellidoPaterno;
			$this -> apellidoMaterno = $apellidoMaterno;
			$this -> fechaIngreso = $fechaIngreso;
			$this -> calle = $calle;
			$this -> numeroInterior = $numeroInterior;
			$this -> numeroExterior = $numeroExterior;
			$this -> colonia = $colonia;
			$this -> estado = $estado;
			$this -> codigoPostal = $codigoPostal;
			$this -> rfc = $rfc;
			$this -> nss = $nss;
			$this -> usuario = $usuario;
			$this -> contrasena = $contrasena;
			$this -> status = $status;
			$this -> email = $email;
		}
}
?>