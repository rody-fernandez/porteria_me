<?php

namespace SistemaPorteria\Http\Controllers;

use Illuminate\Http\Request;
use SistemaPorteria\Http\Requests;
use SistemaPorteria\Almoso;
use SistemaPorteria\Personas;
use Illuminate\Support\Facades\Redirect;
use DB;


class AlmosoController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
      {
             $query=trim($request->get('searchText'));
             $almoso=DB::table('almosos')
                ->where('legajo','LIKE','%'.$query.'%')
                ->where('entry', '=', null)
                ->orderBy('id','desc')
                ->paginate(7); 
             return view('registros.almoso.index',["almoso"=>$almoso,"searchText"=>$query]);
        }
    }

    public function create()
    {
        //$personas = Personas::all();
        return view('registros.almoso.create');
    }

    public function store(Request $request)
    {
         $almoso = new Almoso();
         $almoso->legajo= $request->input('legajo');
         $almoso->exit= date('Y-m-d H:i:s');
         $almoso->save();
         return Redirect::to('almoso/panel');
    }

    public function show($id)
    {
        return view('registros.almoso.panel');
    }

    public function edit($id)
    {
        $almoso = Almoso::where('id',$id)->first();
       return view('registros.almoso.edit', compact('almoso'));
    }

    public function update(Request $request, $id)
    {
         $almoso=Almoso::findOrFail($id);
         $almoso->entry= date('Y-m-d H:i:s');
         $almoso->update();
         return Redirect::to('almoso');
    }

    public function destroy($id)
    {
        $almoso=Almoso::findOrFail($id);
        $almoso->status=$request->get('status');
        $almoso->update();
        return Redirect::to('almoso');
    }
}