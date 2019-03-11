<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;

class elotroController extends Controller
{
    protected $elarreglo;

    public function __construct()
    {}

    public function muestraMensaje(Request $request)
    {
		$this->elarreglo=[
			'nombre' => 'Robocop',
			'modelo' => '1986'
		];
        return view('laotraVista', ['arreglaso' => $this->elarreglo]);
    }
}
?>
