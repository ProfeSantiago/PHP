<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class miModelo extends Model
{
    public $elNombre = "Kal-El";
	protected $laIdentidad = "Clark Kent";
	
	public function devuelveIdentidad()
	{
		return $this->laIdentidad;
	}
}
