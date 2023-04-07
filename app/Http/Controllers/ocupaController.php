<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use Illuminate\Support\Facades\Validator;
use \administracionparqueo;

class ocupaController extends Controller
{
    public function obtenerreserva(){
        return Reserva::all();
    }
    
    public function create()
    {
        return view('reserva.create');
    }


    public function store(Request $request)
    {
       $validation= $request->validate([

            'fecha_hora_solicitud'=> 'required ',
            'fecha_hora_aprobacion' => 'required ',
            'estado' => 'required',
            'id_cliente' => 'required ',
            'id_vehiculo' => 'required ',
        ]);

        $reserva=new Reserva();
        $reserva->fecha_hora_solicitud = $request->fecha_hora_solicitud;
        $reserva->fecha_hora_aprobacion = $request->fecha_hora_aprobacion;
        $reserva->estado = $request->estado;
        $reserva->id_cliente = $request->id_cliente;
        $reserva->id_vehiculo = $request->id_vehiculo;
        
        
        $reserva->save();
    
        return 'Store';
    }
    public function show($id)
    {
        $reserva=Reserva::find($id);
        return $reserva;
    }

}
