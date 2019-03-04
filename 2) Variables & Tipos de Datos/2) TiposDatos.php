<!DOCTYPE html>
<html>
<body>

<?php
	echo "<h1>Tipos de Datos</h1>";
	
	#1)-------------------------------
	$cadenaTexto1 = "Live long";
	$cadenaTexto2 = ' and prosper <br>';
	$cadenaTexto3 = $cadenaTexto1 . $cadenaTexto2;
	echo "Texto Concatenado: " . $cadenaTexto1 . $cadenaTexto2;
	echo "Caracteres: " . strlen($cadenaTexto3).'<br>';
	echo "Palabras: " .str_word_count($cadenaTexto3);
	
	#2)-------------------------------
	$entero = 123;
	var_dump($entero);
	
	#3)-------------------------------
	$flotante = 37.489;
	var_dump($flotante);
	
	#4)-------------------------------
	$Buleana1 = true;
	$Buleana2 = false;
	$otroString = $Buleana1 ? 'verdadero' : 'falso';
	echo $otroString . '<br><br>';	
	
	#5)-------------------------------
	$arreglo = array("Mafalda","Manolito","Susanita");
	echo "Segundo elemento del Arreglo: " . $arreglo[1] .'<br><br>';	
	
	#6)-------------------------------
	class objetoPersona {
		function objetoPersona() {
			$this->nombre = "Pepe Potamo";
		}
	}
	
	$alguien = new objetoPersona();
	echo $alguien->nombre;
	
	#7)-------------------------------
	$nula = null;
	var_dump($nula);

	#8)-------------------------------
	define("lafrase", "Transformense y avancen");
	echo "Ejemplo de constante: " . lafrase;	
?>

</body>
</html>
