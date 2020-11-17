<?php

namespace SistemaPorteria\Http\Controllers;

use Illuminate\Http\Request;

use SistemaPorteria\Http\Requests;
use SistemaPorteria\Personas;
use SistemaPorteria\Almoso;
use SistemaPorteria\Libre;
use Illuminate\Support\Facades\Redirect;
use DB;


class SalidaController extends Controller
{

    public function index()
    {
        return view('registros.salidas.panel');
    }
    public function index_alm(Request $request)
    {
        if ($request)
      {
             $query=trim($request->get('searchText'));
             $almosos=DB::table('almosos')->where('legajo','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(7); 
             return view('registros.salidas.index_almuerzo',["almosos"=>$almosos,"searchText"=>$query]);
        }
    }

    public function index_lb(Request $request)
    {
        if ($request)
      {
             $query=trim($request->get('searchText'));
             $libres=DB::table('libres')->where('legajo','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(7); 
             return view('registros.salidas.index_libre',["libres"=>$libres,"searchText"=>$query]);
        }
    }

    public function create_almuerzo()
    {
        return view('registros.salidas.almuerzo');
    }
    public function create_libre()
    {
        return view('registros.salidas.libre');
    }

    public function store1(Request $request)
    {
         $almoso = new Almoso();
         $almoso->legajo= $request->input('legajo');
         $almoso->exit= date('Y-m-d H:i:s');
         $almoso->save();
         return Redirect::to('salidas');
    }

    public function store2(Request $request)
    {
         $libres = new Libre();
         $libres->legajo= $request->input('legajo');
         $libres->exit= date('Y-m-d H:i:s');
         $libres->save();
         return Redirect::to('salidas');
    }

    public function show($id)
    {
       // return view('registros.salidas.panel');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
