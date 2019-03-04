<!DOCTYPE html>
<html>
<body>

<h3>Lista de Contactos</h3>

<?php
	for ($i = 0; $i < count($datos); $i++) {
		echo "Cedula: " . $datos[$i]["Cedula"]
		. " - Nombre: " . $datos[$i]["Nombre"]
		. " - Telefono: " . $datos[$i]["Telefono"]. "<br>";
	}//Fin For
?>

</body>
</html>

