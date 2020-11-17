@extends('layouts.admin')

@section('title', 'Inicio')

@section('content')
    
    <div class="row">
        @foreach($botones as $boton)
         <div class="col-sm-2" style="margin-bottom: 15px">
         @if  ($boton->status == 1)
                 <a href="{{ url('ingresos/add', $boton->id)}}" name="boton_casilla" class="btn btn-success btn-block ">{{$boton->id}}
                 </a> 
         @elseif ($boton->status == 2) 
                 <a href="{{ url('ingresos/edit', $boton->id)}}" name="boton_casilla" class="btn btn-primary btn-block ">{{$boton->id}}
                 </a> 
         @elseif ($boton->status == 3)
                 <a href="{{ url('ingresos/edit', $boton->id)}}" name="boton_casilla" class="btn btn-danger btn-block ">{{$boton->id}}
                 </a> 
         @else ($boton->status == 0)
                 <a class="btn btn-default btn-block ">{{$boton->id}}
                 </a>
         @endif       
                     </div>
         @endforeach
    </div>
    
@endsection