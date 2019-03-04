<html>
<body>

<?php 
$entero = $_GET["edadTxt"]; 


if ($entero < "18") {
    echo "Es menor de edad, no puede entrar!!";
	
} elseif (($entero >= "18") and ($entero <= "60")) {
	
    echo "Bienvenido, puede entrar!";
	
} else {
    echo "No está un poco viejo para esto?";
}

?>

</body>
</html>