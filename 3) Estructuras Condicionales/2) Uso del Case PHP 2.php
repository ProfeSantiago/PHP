<html>
<body>

<?php 
$tuSeleccion =  $_GET["elSelect"];

switch ($tuSeleccion) {
    case "Corea del Sur":
        echo "oppa gangnam style!";
        break;
    case "Costa Rica":
        echo "Meli Mora canta super bien!";
        break;
	case "Mexico":
        echo "Maribel Guardia canta mejor que la Meli!";
        break;
    default:
        echo "Son tus perjumenes mujer!";
}

?>

</body>
</html>