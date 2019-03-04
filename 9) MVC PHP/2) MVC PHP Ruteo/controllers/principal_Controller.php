<?php
	class principalController {
		public function home() {
			require_once("models/elModelo.php");
			$instanciaClase = new claseModelo;
			
			$instanciaClase->FijaNombre("John");
			$instanciaClase->FijApellido("Salchichon");
			$elNombreFinal = $instanciaClase->FijaNombreCompleto();
			
			require_once("views/principal/laVista.php");
		}

		public function error() {
			require_once('views/principal/error.php');
		}
	}
  
	
?>
