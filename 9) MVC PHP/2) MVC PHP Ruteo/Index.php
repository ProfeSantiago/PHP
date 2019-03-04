<!DOCTYPE html>
<html>
<body>
	<?php 
		
		if (isset($_GET['controller']) && isset($_GET['action'])) {
			$controller = $_GET['controller'];
			$action     = $_GET['action'];
		} else {		
			$controller = 'principal';
			$action     = 'home';		
		}
		
		require_once("rutas.php"); 
	?>
</body>
</html>

