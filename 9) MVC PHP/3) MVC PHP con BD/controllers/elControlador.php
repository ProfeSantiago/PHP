<?php
	require_once("../models/elModelo.php");
    $instancia_claseModelo = new claseModelo();
    $datos = $instancia_claseModelo->ConsultaSQL();
    require_once("../views/laVista.php");
?>
