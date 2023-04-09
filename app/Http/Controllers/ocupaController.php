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

            'fecha_solicitud'=> 'date',
            'hora_solicitud'=> 'time ',
            'fecha_aprobacion' => 'date',
            'hora_aprobacion' => 'time ',
            'estado' => 'string',
           
            
        ]);

        $reserva=new Reserva();
        $reserva->fecha_solicitud = $request->fecha_solicitud;
        $reserva->hora_solicitud = $request->hora_solicitud ;
        $reserva->fecha_aprobacion = $request->fecha_aprobacion;
        $reserva->hora_aprobacion = $request->hora_aprobacion;
        $reserva->estado = $request->estado;
        $reserva->id_cliente = $request->id_cliente;
       
        
        
        $reserva->save();
    
        return 'Store';
    }
    public function show($id)
    {
        $reserva=Reserva::find($id);
        return $reserva;
    }
    public function update(Request $request, $id)
    {
        $reserva = Reserva::findOrFail($request->id);
        $reserva->fecha_solicitud = $request->fecha_solicitud;
        $reserva->hora_solicitud = $request->hora_solicitud ;
        $reserva->fecha_aprobacion = $request->fecha_aprobacion;
        $reserva->hora_aprobacion = $request->hora_aprobacion;
        $reserva->estado = $request->estado;
        $reserva->id_cliente = $request->id_cliente;

        $reserva->save();

        return "actualizado";

    }
    public function destroy($id)
    {
        $Reserva = Reserva::destroy($id);

        return $Reserva;
    }
 
}
