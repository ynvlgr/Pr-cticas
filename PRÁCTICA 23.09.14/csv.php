<?php
/**
*abrir el archivo en sólo lectura
*/
$gestor = fopen("test.csv", "r");

/**
*si se pudo abrir comensar a leer.
*/
if ($gestor !== FALSE) {
	//mientras haya qué leer, imprime el vector leído.
    while (($datos = fgetcsv($gestor)) !== FALSE) {
        var_dump($datos);
    }
    //cerrar
    fclose($gestor);
}
?>