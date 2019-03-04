<?php
	 Class claseModelo{
		private $ListaPersonas;
		private $db;
	 
		public function __construct() {
			$this->ListaPersonas = array();
			$this->db = new PDO('mysql:host=localhost;dbname=bdprueba', "root", "");
		}
	 
		private function setNames() {
			return $this->db->query("SET NAMES 'utf8'");
		}
	 
		public function ConsultaSQL() {
	 
			self::setNames();
			$sql = "SELECT * FROM agenda";
			foreach ($this->db->query($sql) as $elemento) {
				$this->ListaPersonas[] = $elemento;
			}
			return $this->ListaPersonas;
			$this->db = null;
		}
	 			

	}//Fin claseModelo
?>
