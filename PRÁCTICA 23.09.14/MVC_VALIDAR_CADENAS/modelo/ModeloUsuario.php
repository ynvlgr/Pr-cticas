<?php

	/**
	* Modelo del USUARIO
	*/
	class ModeloUsuario
	{
		
		function __construct(){
		}


		function insertar($idEmpleado, $nombre, $apellidoPaterno, $apellidoMaterno, $fechaIngreso, $calle, $numeroExterior, $numeroInterior, $colonia, 
			$ciudad, $estado, $codigoPostal, $rfc, $nss, $email, $usuario, $contrasena, $status){
			
			echo "insertado"; #cambiar a html.
		}

		/**
		*Función encargada de mostrar un listado de usuarios
		*@return Array conteniendo un listado de usuarios
		*/
		function listar(){
			return array("ARGELIA","VIANEY","GARC&Iacute;A","GONZ&Aacute;LEZ");
		}

		/**
		*@param String $cadena validando si sólo contiene números
		*@return Bool dependiendo su validez
		*/
		function validarNumeros($cadena)
		{		
			$patroNumero = "/^[[:digit:]]+$/";
			if(preg_match($patroNumero, $cadena))
				return TRUE;
			return FALSE;	
		}

		/**
		*@param String $email validando si contiene formato de correo
		*@return Bool dependiendo su validez
		*/
		function validarEmail($email)
		{
			$patronEmail = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
			if(preg_match($patronEmail, $email)){
				return TRUE;
			}
			else{
				die("FALL&Oacute; CORREO");
				return FALSE;
			}
			
		}

		/**
		*@param String $texto validando si contiene letras
		*@return Bool dependiendo su validez
		*/
		function validarTexto($texto)
		{
			$patronTexto = "/^[a-zA-Z]{2,15}$/";
			if(preg_match($patronTexto, $texto)){
				return TRUE;
			}
			else{
				die("FALL&Oacute; TEXTO");
				return FALSE;
			}
		}

		/**
		*@param String $telefono validando si contiene formato de número telefónico
		*@return Bool dependiendo su validez
		*/
		function validarTelefono($telefono)
		{
			$patronTelefono = "/^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$/";
			if(preg_match($patronTelefono, $telefono)){
				return TRUE;
			}
			else{
				die("FALL&Oacute; TEL&Eacute;FONO");
				return FALSE;
			}
			
		}
	}

?>