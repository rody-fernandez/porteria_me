<?php

namespace SistemaPorteria\Http\Controllers;

use Illuminate\Http\Request;

use SistemaPorteria\Http\Requests;
use SistemaPorteria\Motivo;
use Illuminate\Support\Facades\Redirect;
use DB;

class MotivosController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
      {
             $query=trim($request->get('searchText'));
             $motivos=DB::table('motivos')->where('nombre','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(7); 
             return view('registros.motivos.index',["motivos"=>$motivos,"searchText"=>$query]);
        }
    }

    public function create()
    {
        return view('registros.motivos.create');
    }

 
    public function store(Request $request)
    {
         $motivos = new Motivo();
         $motivos->nombre= $request->input('nombre');
         $motivos->descripcion= $request->input('descripcion');
         $motivos->status= $request->input('status');
         $motivos->save();
         return Redirect::to('motivos/create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $motivos = Motivo::where('id',$id)->first();
       return view('registros.motivos.edit', compact('motivos'));
    }

    public function update(Request $request, $id)
    {
        $motivos=Motivo::findOrFail($id);
        $motivos->nombre=$request->get('nombre');
        $motivos->descripcion=$request->get('descripcion');
        $motivos->status=$request->get('status');
        $motivos->update();
        return Redirect::to('motivos');   
         }

    public function destroy($id)
    {
        //
    }
}
