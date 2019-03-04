<!DOCTYPE html>
<html>
<body>

<?php
	include '4) ClasExterna.php';
	$instanciaClase = new ClaseMate;
	$instanciaClase->setNumero1(5.75);
	$instanciaClase->setNumero2(39);
	$unResultado = $instanciaClase->suma();
    echo "Sumar 5.75 + 39 = " . strval($unResultado) . "<br>";
?>

</body>
</html>

