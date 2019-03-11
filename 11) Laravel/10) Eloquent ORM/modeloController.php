<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\miModelo;

class modeloController extends Controller
{
    public function muestraModelo()
    {
		$miModelo = new miModelo();
		echo $miModelo->elNombre."<br>";
		echo $miModelo->devuelveIdentidad();
	}
	
	public function llamaVistaModelo()
    {
		$miModelo = new miModelo();
		$superNombre = $miModelo->elNombre;
		$superIdentidad = $miModelo->devuelveIdentidad();
		
		return view('modeloVista', compact(['superNombre', 'superIdentidad']));
	}
}
?>
