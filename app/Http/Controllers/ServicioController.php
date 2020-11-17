<?php

namespace SistemaPorteria\Http\Controllers;
use Illuminate\Http\Request;
use SistemaPorteria\Http\Requests;
use SistemaPorteria\Personas;
use SistemaPorteria\Servicio;
use SistemaPorteria\Motivo;
use Illuminate\Support\Facades\Redirect;
use DB;

class ServicioController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
      {
             $query=trim($request->get('searchText'));
             $servicios=DB::table('servicios')
                ->where('legajo','LIKE','%'.$query.'%')
                ->where('entry', '=', null)
                ->orderBy('id','desc')
                ->paginate(7); 
             return view('registros.servicios.index',["servicios"=>$servicios,"searchText"=>$query]);
        }

    }

    public function create()
    {
        $personas = Personas::all();
        $motivos = Motivo::all();
        return view('registros.servicios.create', compact('personas', 'motivos'));
    }

    public function store(Request $request)
    {
         $servicios = new Servicio();
         $servicios->legajo= $request->input('legajo');
         $servicios->motivo_id= $request->input('motivo_id');
         $servicios->exit= date('Y-m-d H:i:s');
         $servicios->save();
         return Redirect::to('servicios');
    }

    public function show($id)
    {
        return view('registros.servicios.index2');
    }

    public function edit($id)
    {
         $servicios = Servicio::where('id',$id)->where('entry', '=', null)->first();
         return view('registros.servicios.edit', compact('servicios'));
    }

    public function update(Request $request, $id)
    {
         $servicios=Servicio::findOrFail($id);
         $servicios->entry= date('Y-m-d H:i:s');
         $servicios->update();
         return Redirect::to('servicios');
    }

    public function destroy($id)
    {
         $servicios=Servicio::findOrFail($id);
         $servicios->status=$request->get('status');
         $servicios->update();
         return Redirect::to('servicios');
    }
}
