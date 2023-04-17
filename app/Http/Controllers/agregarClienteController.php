<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agrergarCliente;
use Illuminate\Support\Facades\Validator;
use \administracionparqueo;

class agregarClienteController extends Controller
{
   
    public function create()
    {
        return view('administrador.clientes.agregarCliente');
    }
}