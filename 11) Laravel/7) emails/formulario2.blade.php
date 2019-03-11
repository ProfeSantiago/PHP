<!DOCTYPE html> 
<html> 
<head></head> 
<body>	 
	<h3>Envío de Correos</h3>
	<form method="post" action="{{ route('mensajecorreo') }}">
		{{ csrf_field() }}
		Nombre:<br>
		<input type="text" name="nombre" required>
		<br><br>
		email:<br>
		<input type="text" name="email" required>
		<br><br>
		Asunto:<br>
		<input type="text" name="asuntirijillo" required>
		<br><br>
		Mensaje:<br>
		<textarea rows="3" name="mensajito" required></textarea>
		<br><br>
		<input type="submit" value="Guardar"/>
	</form>	
	
	@if(session()->has('flash'))
		<p><b>{{session()->get('flash')}}</b></p>
	@endif
</body> 
</html> 