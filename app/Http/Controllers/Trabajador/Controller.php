<?php

namespace App\Http\Controllers\Trabajador;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
    public function getIndex(){

    	return "Hola Trabajador";

    }
    
}
