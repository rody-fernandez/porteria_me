<?php

namespace SistemaPorteria\Http\Controllers;
use Illuminate\Http\Request;
use SistemaPorteria\Http\Requests;
use SistemaPorteria\Ingreso;
use SistemaPorteria\Botones;
use SistemaPorteria\Personas;
use SistemaPorteria\Motivo;
use Illuminate\Support\Facades\Redirect;
use DB;

class IngresoController extends Controller
{
    public function index(Request $request)
    {
       $botones = Botones::all();
        return view('ingresos.index', compact('botones'));      
    }

    public function create()
    { 
      //
    }

    public function store(Request $request)
    {
                    $ingreso = new Ingreso();
                    $botones = Botones::find($request->boton);
                    $ingreso->nombre_id= $request->input('nombre_id');
                    $ingreso->motivo_id= $request->input('motivo_id');
                    $ingreso->junto_id= $request->input('junto_id');
                    $ingreso->autorizado_id= $request->input('autorizado_id');
                    $ingreso->time= $request->input('time');
                    $botones->time= $request->input('time');
                    $botones->status= $request->input('status');
                    $ingreso->boton= $request->input('boton');
                    $ingreso->ingreso=date('Y-m-d H:i:s');
                    $ingreso->save();
                    $botones->save();
                    return Redirect::to('ingresos');          
    }

    public function show($id)
    {
         $personas = Personas::all();
         $motivos = Motivo::all();
         $botones = Botones::find($id);
         return view('ingresos.create', compact('botones', 'personas', 'motivos'));
    }

    public function selectpersonas($id)
    {
         $personas = Personas::all();
         return view('ingresos.create', compact('personas'));
    }

    public function edit($id)
    {
         $ingresos = Ingreso::where('boton',$id)->where('salida', '=', null)->first();
         $motivos = Motivo::find($ingresos->motivo_id);
         $botones = Botones::find($id);
         $nombres = Personas::find($ingresos->nombre_id);
         $junto = Personas::find($ingresos->junto_id);
         $autorizado = Personas::find($ingresos->autorizado_id);
         return view('ingresos.edit', compact('ingresos', 'motivos', 'botones', 'nombres', 'junto', 'autorizado'));
                  
    }

    public function update(Request $request, $id)
    {
         $ingreso = Ingreso::find($id);
         $botones = Botones::find($request->boton);
         $botones->time= $request->input('time');
         $botones->status= $request->input('status');
         $ingreso->salida=date('Y-m-d H:i:s');
         $ingreso->save();
         $botones->save();
         return Redirect::to('ingresos'); 
    }

    public function destroy($id)
    {
        //
    }
}
