<pre>
<?php

error_reporting(E_ALL); // Si el examen está bien hecho NO debe mostrar ningún Warning ni error de PHP

function examen($iMin, $iMax, &$aDatos){
    if($iMax > $Min) 
    
    return TRUE;
}


// CASO DE PRUEBA 1
$aDatos1 = array();
$iMin = 1;
$iMax = 30;
$bExamen = FALSE;
$bExamen = examen($iMin, $iMax, $aDatos1);

if($bExamen){	echo "Caso de prueba 1:\n";
	print_r($aDatos1);
	echo "\n";
} else {
	echo "\nEl caso de Prueba 1 no se ha procesado porque los parámetros no cumplen con los requisitos.";	
}

// CASO DE PRUEBA 2
$aDatos2 = NULL;
$iMin = 60;
$iMax = 90;
$bExamen = TRUE;
$bExamen = examen($iMin, $iMax, $aDatos2);

if($bExamen){
	echo "\nCaso de prueba 2:\n";
	print_r($aDatos2);
	echo "\n";
} else {
	echo "\nEl caso de Prueba 2 no se ha procesado porque los parámetros no cumplen con los requisitos.";	
}

// CASO DE PRUEBA 3
$aDatos3 = array();
$iMin = "60";
$iMax = "90";
$bExamen = TRUE;
$bExamen = examen($iMin, $iMax, $aDatos3);

if($bExamen){
	echo "\nCaso de prueba 3:\n";
	print_r($aDatos3);
	echo "\n";
} else {
	echo "\nEl caso de Prueba 3 no se ha procesado porque los parámetros no cumplen con los requisitos.";	
}

// CASO DE PRUEBA 4
$aDatos4 = array();
$iMin = 12.51;
$iMax = 30.92;
$bExamen = NULL;
$bExamen = examen($iMin, $iMax, $aDatos4);

if($bExamen){
	echo "\nCaso de prueba 4:\n";
	print_r($aDatos4);
	echo "\n";
} else {
	echo "\nEl caso de Prueba 4 no se ha procesado porque los parámetros no cumplen con los requisitos.";	
}

// CASO DE PRUEBA 5
$aDatos5 = array();
$iMin = 999;
$iMax = 1029;
$bExamen = FALSE;
$bExamen = examen($iMin, $iMax, $aDatos5);

if($bExamen){
	echo "\nCaso de prueba 5:\n";
	print_r($aDatos5);
	echo "\n";
} else {
	echo "\nEl caso de Prueba 5 no se ha procesado porque los parámetros no cumplen con los requisitos.";	
}

// CASO DE PRUEBA 6
$aDatos6 = array();
$iMin = 90;
$iMax = 120;
$bExamen = TRUE;
$bExamen = examen($iMin, $iMax, $aDatos6);

if($bExamen){
	echo "\nCaso de prueba 6:\n";
	print_r($aDatos6);
	echo "\n";
} else {
	echo "\nEl caso de Prueba 6 no se ha procesado porque los parámetros no cumplen con los requisitos.";	
}

// *********************** NO MODIFICAR (FIN del Test de la función) ************************** //
?>
</pre>
















