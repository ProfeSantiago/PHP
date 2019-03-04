<?php
	 Class Negocios{
		 
		function Conecta(){	
			$elServidor = "localhost";
			$elUsuario = "root";
			$elPassword = "";
			$laBD="bdprueba";

			$laconexion = new mysqli($elServidor, $elUsuario, $elPassword, $laBD);
			
			if ($laconexion->connect_error) {
				die("Error al Conectar con la BD: " . $laconexion->connect_error);
			} 
			echo "Conexion exitosa <br>";
			
			return $laconexion;			
		}//End Conecta ------------------------------------------------------------------

		function ConsultaSQL($elQuery){			
			$conexion = $this->Conecta();			
			$queryDevuelto = $conexion->query($elQuery);
			return $queryDevuelto;			  
		}//End ConsultaSQL  -----------------------------------------------------------
		
		function imprimeResultados($miQuery){
			 if ($miQuery->num_rows > 0) {
				while($row = $miQuery->fetch_assoc()) {
					echo "Cedula: " . $row["Cedula"]. " - Nombre: " . $row["Nombre"]. " - Telefono: " . $row["Telefono"]. "<br>";
				}
			} else {
				echo "0 Filas";
			}
		}//End imprimeResultados  -----------------------------------------------------------
			

	}//Fin Negocios
?>
