<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class BDController extends Controller
{
   public function MuestraDatos()
	{
		$variableGente = DB::select('select * from personas');
		return view('BDVista', ['laGente' => $variableGente]);
	}
	
	public function InsertaDatos()
	{
		DB::insert('insert into personas (Cedula, Nombre, Telefono) values (?, ?, ?)', [5, 'Harrrley Queen', '6666-6666']);
		$variableGente = DB::select('select * from personas');		
		return view('BDVista', ['laGente' => $variableGente]);
	}
	
	public function ActualizaDatos()
	{
		DB::update('update personas set Nombre = "Margot Robie" where Cedula = ?', ['5']);
		$variableGente = DB::select('select * from personas');		
		return view('BDVista', ['laGente' => $variableGente]);
	}
	
	//DB::delete('delete from personas');
}
?>
