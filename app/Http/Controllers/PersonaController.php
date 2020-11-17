<?php

namespace SistemaPorteria\Http\Controllers;

use Illuminate\Http\Request;

use SistemaPorteria\Http\Requests;
use SistemaPorteria\Personas;
use SistemaPorteria\Cargo;
use SistemaPorteria\Empresa;
use Illuminate\Support\Facades\Redirect;
use DB;

class PersonaController extends Controller
{

    public function index(Request $request)
    {
       if ($request)
      {
             $query=trim($request->get('searchText'));
             $personas=DB::table('personas')->where('nombre','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(7); 
             return view('registros.personas.index',["personas"=>$personas,"searchText"=>$query]);
        }       
    }

    public function create()
    { 
         $empresas = Empresa::all();
         $cargos = Cargo::all();
         return view('registros.personas.create',  compact('empresas','cargos'));
    }

    public function store(Request $request)
    {
         
        $personas = new Personas();
        $personas->nro_documento= $request->input('nro_documento');
        $personas->nombre= $request->input('nombre');
        $personas->nacionalidad= $request->input('nacionalidad');
        $personas->empresa_id= $request->input('empresa_id');
        $personas->cargo_id= $request->input('cargo_id');
        $personas->telefono= $request->input('telefono');
        $personas->legajo= $request->input('legajo');
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $file->move(public_path().'/img/',$file->getClientOriginalName());
            $personas->foto= $file->getClientOriginalName();
        } 
        $personas->save();
        return Redirect::to('personas');  
    }

    public function show($id)
    {
          //
    }
    
    public function edit($id)
    {
        $personas = Personas::where('id',$id)->first();
        $empresas = Empresa::all();
        $cargos = Cargo::all();
        return view('registros.personas.edit', compact('personas', 'empresas', 'cargos'));
    }

    public function update(Request $request, $id)
    {
        $personas=Personas::findOrFail($id);
        $personas->nro_documento= $request->input('nro_documento');
        $personas->nombre= $request->input('nombre');
        $personas->nacionalidad= $request->input('nacionalidad');
        $personas->empresa_id= $request->input('empresa_id');
        $personas->cargo_id= $request->input('cargo_id');
        $personas->telefono= $request->input('telefono');
        $personas->legajo= $request->input('legajo');
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $file->move(public_path().'/img/',$file->getClientOriginalName());
            $personas->foto= $file->getClientOriginalName();
        } 
        $personas->update();
        return Redirect::to('personas');  
    }

    public function destroy($id)
    {
        //
    }
}
