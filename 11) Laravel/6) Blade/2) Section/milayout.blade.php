<nav>
	<ul id="menu">	
	<li><a href="http://localhost:8282/miproyecto/public/Rutas2">Con Mensaje</a></li>
	<li><a href="http://localhost:8282/miproyecto/public/Rutas3">Sin Mensaje</a></li>
	<li><a href="{{route('rutaincluir')}}">Ejemplo Includes</a></li>
	</ul> 
</nav>	

@yield('elcontenido')