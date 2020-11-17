<?php

namespace SistemaPorteria\Http\Controllers;

use Illuminate\Http\Request;

use SistemaPorteria\Http\Requests;
use SistemaPorteria\Empresa;
use Illuminate\Support\Facades\Redirect;
use DB;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if ($request)
      {
             $query=trim($request->get('searchText'));
             $empresas=DB::table('empresas')->where('nombre','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(7); 
             return view('registros.empresas.index',["empresas"=>$empresas,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registros/empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $empresas = new Empresa();
         $empresas->nombre= $request->input('nombre');
         $empresas->descripcion= $request->input('descripcion');
         $empresas->status= $request->input('status');
         $empresas->save();

         return Redirect::to('empresas/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // modal de delete
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $empresas = Empresa::where('id',$id)->first();
       return view('registros.empresas.edit', compact('empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empresas=Empresa::findOrFail($id);
        $empresas->nombre=$request->get('nombre');
        $empresas->descripcion=$request->get('descripcion');
        $empresas->status=$request->get('status');
        $empresas->update();
        return Redirect::to('empresas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
