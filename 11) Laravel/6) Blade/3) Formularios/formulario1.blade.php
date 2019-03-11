<!DOCTYPE html> 
<html> 
<head></head> 
<body>	 
	<h3>Registro de usuarios</h3>
	<form method="post" action="{{ route('formularito') }}">
		{{ csrf_field() }}
		Nombre:
		<input type="text" name="Nombre" value="Optimus">
		<br><br>
		Apellidos:
		<input type="text" name="Apellido" value="Prime">
		<br><br>
		<input type="submit" value="Guardar"/>
	</form>	
</body> 
</html> 