<?php

//inicio
if(isset($_GET['inicio']))
{
	$inicio = $_GET['inicio'];
}else
{
	$inicio = 1;
}

//noTablas
if(isset($_GET['noTablas']))
{
	$noTablas = $_GET['noTablas'];
}else
{
	$noTablas = 10;
}

//fin
if(isset($_GET['fin']))
{
	$fin = $_GET['fin'];
}else
{
	$fin = 12;
}

multiplicar($inicio,$fin,$noTablas);

//Si le falta un parámetro lo inicializa en 0
function multiplicar($inicio,$fin,$noTablas)
{
	for($indice = $inicio; $indice<$inicio+$noTablas; $indice++)
	{
		for($contador = 1; $contador <= $fin; $contador++)
		{
			echo $indice.' * '.$contador.' = '. $indice*$contador. '<br/>';
		}
		echo '<br/>';
	}
}
?>