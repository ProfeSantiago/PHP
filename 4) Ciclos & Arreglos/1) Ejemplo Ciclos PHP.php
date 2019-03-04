<!DOCTYPE html>
<html>
<body>

<h1>Ejemplo de Cíclos</h1>

<?php
	$Linea = 1;
	while($Linea <= 3) {
		echo "Linea While #: $Linea <br>";
		$Linea++;
	} 
	
	echo "<br>";
	
	$DoLinea = 1; 
	do {
		echo "Linea Do While #: $DoLinea <br>";
		$DoLinea++;
	} while ($DoLinea <= 3);

	
	echo "<br>";
	
	for ($LineaFor = 1; $LineaFor <= 3; $LineaFor++) {
		echo "Linea For #: $LineaFor <br>";
	} 
?>

</body>
</html>

