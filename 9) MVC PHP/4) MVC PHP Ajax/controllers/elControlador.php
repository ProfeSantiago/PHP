<?php
	header('Access-Control-Allow-Origin: *');

	require_once("../models/elModelo.php");
    $instanciaClase = new claseModelo;
	
	$instanciaClase->FijaNombre("Sheldon");
	$instanciaClase->FijApellido("Cooper");
	$elNombreFinal = $instanciaClase->FijaNombreCompleto();
	
	$arregloPersonas = array("Nombre"=>$elNombreFinal);		
	$elJSON = json_encode($arregloPersonas);
	
	echo $elJSON;	
?>
