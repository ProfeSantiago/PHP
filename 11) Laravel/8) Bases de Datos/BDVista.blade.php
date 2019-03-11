<!DOCTYPE html>
<html>
<body>

<h3>Lista de Personas desde la BD</h3>

	<?php
		foreach ($laGente as $alguien) {
			echo $alguien->Nombre."<br>";
		}
	?>
</body>
</html>

