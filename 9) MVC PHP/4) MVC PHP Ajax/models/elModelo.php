<?php
	 Class claseModelo{
		 
		private $nombre;
		private $apellido;
		private $nombreCompleto;
		
		public function __construct() 
		{
			$this->nombre="";
			$this->apellido="";
			$this->nombreCompleto="";
		}
		
		function FijaNombre($nom) {
			$this->nombre=$nom;
		}
		
		function FijApellido($ape) {
			$this->apellido=$ape;
		}
		
		function FijaNombreCompleto() {
			$this->nombreCompleto = $this->nombre ." ". $this->apellido;
			return $this->nombreCompleto;
		}

	}//Fin claseModelo
?>
