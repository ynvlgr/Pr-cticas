<?php

class Tablas
{
	public $noTablas,$inicio,$fin;

	public function __construct() {
		$this->noTablas = 10;
		$this->inicio = 1;
		$this->fin = 12;
	}

	public function multiplicar() {
		for($indice = $this->inicio; $indice< ($this->inicio+$this->noTablas); $indice++){
			for($contador = 1; $contador <= $this->fin; $contador++){
				echo $indice.' * '.$contador.' = '. $indice*$contador. '<br/>';
			}
			echo '<br/>';
		}
	}

	public function setTablas($noTablas){
		$this->noTablas = $noTablas;
	}

	public function setInicio($inicio){
		$this->inicio = $inicio;
	}

	public function setFin($fin){
		$this->fin = $fin;
	}
}

$tablas = new Tablas;

if (isset($_GET['noTablas'])){
	$tablas->setTablas($_GET['noTablas']);
}
if (isset($_GET['inicio'])){
	$tablas->setInicio($_GET['inicio']);
}
if (isset($_GET['fin'])){
	$tablas->setFin($_GET['fin']);
}
$tablas->multiplicar();
?>