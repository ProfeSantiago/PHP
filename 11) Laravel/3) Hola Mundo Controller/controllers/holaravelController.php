<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class holaravelController extends Controller
{
    public function saluda(Request $request)
    {
        return "Hola Laravel y muchachos!!";
    }
}
?>
