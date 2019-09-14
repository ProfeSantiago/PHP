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
			$conexion->close();			  
		}//End ConsultaSQL  -----------------------------------------------------------

		function GuardaSQL($elQuery){	
			if ($conexion->query($elQuery) === TRUE) {
				echo "Registro insertado satisfactoriamente";
			} else {
				echo "Ocurrio un error: " . "<br>" . $conexion->error;
			}
			$conexion->close();	
		}//End InsertaSQL  -----------------------------------------------------------
		
		function imprimeResultados($miQuery){
			 if ($miQuery->num_rows > 0) {
				while($row = $miQuery->fetch_assoc()) {
					echo      "#: " . $row["Id_Cliente"] 
							. " - Nombre: " . $row["Nombre_Cliente"] 
							. " - Fecha de Registro: " . $row["Fecha_Registro"]
							. " - Telefono Fijo: " . $row["Tel1_Cliente"]
							. " - Telefono Celular: " . $row["Tel2_Cliente"]
							. " - Cantón: " . $row["Canton_Cliente"]
							. " - Dirección: " . $row["Dir_Cliente"]
							. "<br>";
				}
			} else {
				echo "0 Filas";
			}
		}//End imprimeResultados  -----------------------------------------------------------
			

	}//Fin Negocios
?>
