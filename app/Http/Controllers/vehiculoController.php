<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Cliente;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\BD;
use \administracionparqueo;

class vehiculoController extends Controller
{
    public function createLista(){
        $listav = Vehiculo::all(); 
        $idClientesv = $listav->pluck('id_cliente');

        $listaClientes = Cliente::all();
        $ciClientes= $listaClientes->pluck('id','ci');

        $collection = collect([]);
        
        foreach($listav as $listavehiculo){
            foreach($listaClientes as $listaCli){
                if($listavehiculo->id_cliente == $listaCli->id){
                    $collection = $collection->push($listaCli->ci);
                    $collectionFinal = collect($collection);
                }
            }
        }
        if($listaClientes){echo $collection;echo $listav;}
        return view('administrador.vehiculos', compact('listav', 'collection'));
    }
    public function createAgregar(){
        return view('administrador.agregarVehiculo');
    }
    public function store(Request $request)
    {
        $ciCliente = $request->ci;
        $cliente = Cliente::where('ci', $ciCliente)->get();
        $idcliente = $cliente->pluck('id');
        $idclienteNum = $idcliente->implode(" ");

        if($cliente){
            echo "Cliente hay";
            echo $cliente;
            echo $idcliente;
            echo $idclienteNum;

        }else{
            echo "Cliente No hay";
        }
        $vehiculo=new vehiculo();
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->placa = $request->placa;
        $vehiculo->color = $request->color;
        //$vehiculo->id_cliente = "1";
        $vehiculo->id_cliente = $idclienteNum;
        
        $vehiculo->save();
        return redirect('/administrador/agregarVehiculo');
    }
}