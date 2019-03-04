<!DOCTYPE html>
<html>
<body>

<?php
	include '3) ClasExterna.php';

	$instanciaClase = new ClaseMate;

    echo "Sumar 5.75 + 39 = " . strval($instanciaClase->suma(5.75, 39)) . "<br>";
?>

</body>
</html>

