<?php
	class ClaseMate {
		
		private $numero1;
		private $numero2;
		private $resultado;
		
		public function __construct() 
		{
			$this->numero1=0;
			$this->numero2=0;
			$this->resultado=0;
		}
		
		function setNumero1($num1) {
			$this->numero1=$num1;
		}
		
		function setNumero2($num2) {
			$this->numero2=$num2;
		}
		
		function suma() {
			$this->resultado = $this->numero1 + $this->numero2;
			return $this->resultado;
		}
		
		
	}//Fin MiClase
?>
