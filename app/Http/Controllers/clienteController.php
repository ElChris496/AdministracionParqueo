<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Validator;
use \administracionparqueo;

class clienteController extends Controller
{
   
    public function obtenercliente(){
        return Cliente::all();
    }
    
    public function create()
    {
        return view('cliente.create');
    }

   
    public function store(Request $request)
    {
       /* $validation= $request->validate([

            'nombres' => 'required | min:3 | max: 30',
            'apellidos' => 'required | min:3 | max: 30',
            'ci' => 'required|numeric| digits_between:6,10 ',
            'correo' => 'required |email',
            'celular' => 'required |numeric| digits:8',
        ]);

        $cliente=new Cliente();
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->correo = $request->correo;
        $cliente->celular = $request->celular;
        $cliente->ci = $request->ci;
        
        $cliente->save();*/
        dd($request->all());
        return 'Store';
    }

    
    public function show($id)
    {
        $Cliente=Cliente::find($id);
        return $Cliente;
    }


   // public function edit($id)
    //{
        //
    //}

  
    public function update(Request $request, $id)
    {
        $Cliente = Cliente::findOrFail($request->id);
        $Cliente->idCliente = $request->idCliente;
        $Cliente->nombres = $request->nombres;
        $Cliente->apellidos = $request->apellidos;
        $Cliente->correo = $request->correo;
        $Cliente->celular = $request->celular;
        $Cliente->ci = $request->ci;


        $Cliente->save();

        return $Cliente;

    }
 

    public function destroy($id)
    {
        $Cliente = Cliente::destroy($id);

        return $Cliente;
    }
}
