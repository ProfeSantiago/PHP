<!DOCTYPE html>
<html>
<body>

<?php
	class ClaseMate {
		
		public function __construct() 
		{}
		
		function suma($num1, $num2) {
			$resultado = $num1 + $num2;
			return $resultado;
		}
		
		function resta($num1, $num2) {
			$resultado = $num1 - $num2;
			return $resultado;
		}
		
		function multiplicacion($num1, $num2) {
			$resultado = $num1 * $num2;
			return $resultado;
		}
		
		function division($num1, $num2) {
			$resultado = $num1 / $num2;
			return $resultado;
		}
		
	}//Fin ClaseMate

	$instanciaClase = new ClaseMate;

	echo "Sumar 5.75 + 39 = " . strval($instanciaClase->suma(5.75, 39)) . "<br>";
?>

</body>
</html>

