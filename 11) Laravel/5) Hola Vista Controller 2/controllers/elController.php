<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;

class elController extends Controller
{
    public function muestraMensaje(Request $request, $elparametro )
    {
	return view('laVista', ['elmensaje' => $elparametro]);
    }
}
?>
