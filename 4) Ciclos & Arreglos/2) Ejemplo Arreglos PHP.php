<!DOCTYPE html>
<html>
<body>

<?php
	$arreglo = array("Mafalda","Manolito","Susanita");
	echo "Segundo elemento del Arreglo: " . $arreglo[1] .'<br><br>';	
	
	$arreglo[3] = "Guille";
	echo "Ultimo elemento del Arreglo: " . $arreglo[3] .'<br><br>';
	
	echo "Contenido completo del Arreglo: <br>";
	
	foreach ($arreglo as $personaje) {
		echo "$personaje <br>";
	}
?>

</body>
</html>

