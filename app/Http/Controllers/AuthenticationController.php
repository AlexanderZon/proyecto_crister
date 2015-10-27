<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Redirect;
use View;
use Session;
use Input;

class AuthenticationController extends Controller
{
    public function getIndex(){

        if(Auth::check()):

            switch(Auth::user()->rol->nombre):
                case 'administrador':
                    return Redirect::to('/administrador');
                    break;
                case 'rrhh':
                    return Redirect::to('/rrhh');
                    break;
                case 'trabajador':
                    return Redirect::to('/trabajador');
                    break;
                default:
                    return Redirect::to('/trabajador');
                    break;
            endswitch;

        else:
            return Redirect::to('/auth/login');
        endif;

    }

    public function getLogin(){
        
        if(Auth::check()):

            return Redirect::to('/auth');

        else:

            $args = array(
                'msg_error' => Session::get('msg_error')
                );

            return View::make('auth.login')->with($args);

        endif;

    }

    public function postLogin(){

        $credentials = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
            );

        if(Auth::attempt($credentials)):

            return Redirect::to('/auth');

        else:

            return Redirect::to('/auth/login')->with('msg_error', 'Usuario o Contraseña Inválida');

        endif;

    }
}
