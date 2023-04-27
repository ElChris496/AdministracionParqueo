<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\BD;
use \administracionparqueo;

class clientesController extends Controller
{
    public function lista(){
        $lista = Cliente::all();
        return $lista;
    }
    public function createLista(){
        $lista = Cliente::all();
        return view('administrador.clientes', compact('lista'));
    }
    public function createAgregar(){
        return view('administrador.agregarCliente');
    }
    public function createEditar($id){
        $cliente = Cliente::find($id);
        return view('administrador.editarCliente', compact('cliente'));
    }
    public function createBorrar($id){
        $cliente = Cliente::find($id);
        return view('administrador.borrarCliente', compact('cliente'));
    }
    public function store(Request $request)
    {
        $cliente=new Cliente();
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->correo = $request->correo;
        $cliente->celular = $request->celular;
        $cliente->ci = $request->ci;
        
        $cliente->save();
        return redirect('/administrador/clientes');
    }
    public function update(Request $request,$id)
    {
        $cliente = Cliente::findOrFail($request->id);
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->correo = $request->correo;
        $cliente->celular = $request->celular;
        $cliente->ci = $request->ci;


        $cliente->save();
        return redirect('/administrador/clientes');
    }
    public function delete($id)
    {
        $Cliente = Cliente::destroy($id);
        return redirect('/administrador/clientes');
        //return $Cliente;
    }
}