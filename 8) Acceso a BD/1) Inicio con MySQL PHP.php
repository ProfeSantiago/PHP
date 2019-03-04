<!DOCTYPE html>
<html>
<body>

<?php
	include 'utilBD.php';
	$objetoNegocios = new Negocios();
	$elSQL ="SELECT * FROM agenda"; 		
	$miQuery = $objetoNegocios->ConsultaSQL($elSQL); 
	$objetoNegocios->imprimeResultados($miQuery); 
?>

</body>
</html>

