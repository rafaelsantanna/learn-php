<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsuariosController extends Controller
{
    public function index()
    {
      //Passando a váriavel texto para acessar na View com o Blade
      return view('usuarios', [
        'texto' => 'Hello World da View']);
    }
}
