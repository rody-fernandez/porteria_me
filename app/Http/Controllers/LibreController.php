<?php

namespace SistemaPorteria\Http\Controllers;

use Illuminate\Http\Request;
use SistemaPorteria\Libre;
use SistemaPorteria\Personas;
use Illuminate\Support\Facades\Redirect;
use DB;


class LibreController extends Controller
{
    
    public function index(Request $request)
    {
       //
    }

    public function create()
    {
        //$personas = Personas::all();
        return view('registros.libres.create');
    }

    public function store(Request $request)
    {
         $libres = new Libre();
         $libres->legajo= $request->input('legajo');
         $libres->exit= date('Y-m-d H:i:s');
         $libres->save();
         return Redirect::to('almoso/panel');
    }

    public function show($id)
    {
        //return view('registros.almoso.panel');
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