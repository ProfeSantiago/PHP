<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;

class elController extends Controller
{
    protected $elmensaje;

    public function __construct()
    {
        $this->elmensaje = "Hola Vista";
    }

    public function muestraMensaje(Request $request)
    {
        return view('laVista', ['elmensaje' => $this->elmensaje]);
    }
}
?>
