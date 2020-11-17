<?php

namespace SistemaPorteria\Http\Controllers;

use Illuminate\Http\Request;

use SistemaPorteria\Http\Requests;
use SistemaPorteria\Historial;
use Illuminate\Support\Facades\Redirect;
use DB;

class HistorialController extends Controller
{

    public function index(Request $request)
    {
     

         if ($request)
      {
             $query=trim($request->get('searchText'));
             $ingresos=DB::table('ingresos as i')
                ->join('personas as p','i.nombre_id','=','p.id')
                ->select('i.*','p.nombre as nombre')
                ->where('p.nombre','LIKE','%'.$query.'%')
                ->orderBy('i.id','desc')
                ->paginate(7); 
             return view('relatorios.historiales.historial',["ingresos"=>$ingresos,"searchText"=>$query]);
        }


    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
