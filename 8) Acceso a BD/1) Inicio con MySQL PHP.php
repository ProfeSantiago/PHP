<!DOCTYPE html>
<html>
<body>

<?php
	include 'utilBD.php';
	$objetoNegocios = new Negocios();

	/*
	$elSQL = "INSERT INTO Clientes
			(Id_Cliente, Nombre_Cliente, Fecha_Registro, Canton_Cliente, Dir_Cliente, Tel1_Cliente, Tel2_Cliente) 
			VALUES ('', '', '', '', '', '', '')";
    $objetoNegocios->GuardaSQL($elSQL); 
	*/

	$elSQL ="SELECT * FROM Clientes"; 		
	$miQuery = $objetoNegocios->ConsultaSQL($elSQL); 
	
	$objetoNegocios->imprimeResultados($miQuery); 
?>

</body>
</html>

