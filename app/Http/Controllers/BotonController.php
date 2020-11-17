<?php

namespace SistemaPorteria\Http\Controllers;

use Illuminate\Http\Request;

use SistemaPorteria\Http\Requests;
use SistemaPorteria\Botones;
use Illuminate\Support\Facades\Redirect;
use DB;

class BotonController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
      {
             $query=trim($request->get('searchText'));
             $botones=DB::table('botones')->where('numero','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(7); 
             return view('registros.botones.index',["botones"=>$botones,"searchText"=>$query]);
        }
    }

    public function create()
    {
       return view('registros.botones.create');
    }

    public function store(Request $request)
    {
         $botones = new Botones();
         $botones->numero= $request->input('numero');
         $botones->status= $request->input('status');
         $botones->time= $request->input('time');
         $botones->save();
         return Redirect::to('botones/create');
    }

    public function show($id)
    {
         //
    }

    public function edit($id)

    {
        $botones = Botones::where('id',$id)->first();
       return view('registros.botones.edit', compact('botones'));
    }

    public function update(Request $request, $id)
    {
        $botones=Botones::findOrFail($id);
        $botones->numero=$request->get('numero');
        $botones->status=$request->get('status');
        $botones->update();
        return Redirect::to('botones');
    }

    public function destroy($id)
    {
        //
    }
}
