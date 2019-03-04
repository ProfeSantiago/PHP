<?php
	require_once("../models/elModelo.php");
    $instanciaClase = new claseModelo;
	
	$instanciaClase->FijaNombre("John");
	$instanciaClase->FijApellido("Wick");
	$elNombreFinal = $instanciaClase->FijaNombreCompleto();
	
    require_once("../views/laVista.php");
?>
