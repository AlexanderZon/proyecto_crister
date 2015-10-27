<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller as BaseController;
use View;
use Response;
use Input;

class Controller extends BaseController
{
    public function getIndex(){

    	return View::make('administrador.index');

    }

}
