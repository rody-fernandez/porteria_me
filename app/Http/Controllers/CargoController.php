<?php

namespace SistemaPorteria\Http\Controllers;
use Illuminate\Http\Request;
use SistemaPorteria\Http\Requests;
use SistemaPorteria\Cargo;
use Illuminate\Support\Facades\Redirect;
use DB;
class CargoController extends Controller
{

    public function index(Request $request)
    { 
        if ($request)
      {
             $query=trim($request->get('searchText'));
             $cargos=DB::table('cargos')->where('nombre','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(7); 
             return view('registros.cargos.index',["cargos"=>$cargos,"searchText"=>$query]);
        }
    }

    public function create()
    {
        return view('registros/cargos.create');
    }

    public function store(Request $request)
    {
         $cargos = new Cargo();
         $cargos->nombre= $request->input('nombre');
         $cargos->descripcion= $request->input('descripcion');
         $cargos->status= $request->input('status');
         $cargos->save();
         return Redirect::to('cargos');
    }

    public function show($id)
    {
       //
    }

    public function edit($id)
    {
       $cargos = Cargo::where('id',$id)->first();
       return view('registros.cargos.edit', compact('cargos'));
    }

    public function update(Request $request, $id)
    {
        $cargos=Cargo::findOrFail($id);
        $cargos->nombre=$request->get('nombre');
        $cargos->descripcion=$request->get('descripcion');
        $cargos->status=$request->get('status');
        $cargos->update();
        return Redirect::to('cargos');
    }

    public function destroy($id)
    {
        $cargos=Cargo::findOrFail($id);
        $cargos->status='0';
        $cargos->update();
        return Redirect::to('cargos');
    }
}
