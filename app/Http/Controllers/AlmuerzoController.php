<?php

namespace SistemaPorteria\Http\Controllers;

use Illuminate\Http\Request;
use SistemaPorteria\Http\Requests;
use SistemaPorteria\Almuerzo;
use SistemaPorteria\Personas;
use Illuminate\Support\Facades\Redirect;
use DB;


class AlmuerzoController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
      {
             $query=trim($request->get('searchText'));
             $almosos=DB::table('almosos')->where('legajo','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(7); 
             return view('registros.almuerzos.index',["almosos"=>$almosos,"searchText"=>$query]);
        }

    }

    public function create()
    {
        $personas = Personas::all();
        return view('registros.almuerzos.create', compact('personas'));
    }

    public function store(Request $request)
    {
         $almuerzos = new Almuerzo();
         $almuerzos->name_id= $request->input('name_id');
         $almuerzos->status= $request->input('status');
         $almuerzos->exit= date('Y-m-d H:i:s');
         $almuerzos->save();
         return Redirect::to('almuerzos/create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $almuerzos = Almuerzo::where('id',$id)->first();
       return view('registros.almuerzos.edit', compact('almuerzos'));
    }

    public function update(Request $request, $id)
    {
        $almuerzos=Servicio::findOrFail($id);
        $almuerzos->name_id=$request->get('name_id');
        $almuerzos->status=$request->get('status');
        $almuerzos->update();
        return Redirect::to('almuerzos');
    }

    public function destroy($id)
    {
        $almuerzos=Servicio::findOrFail($id);
        $almuerzos->status=$request->get('status');
        $almuerzos->update();
        return Redirect::to('almuerzos');
    }
}