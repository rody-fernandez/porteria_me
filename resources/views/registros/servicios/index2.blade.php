@extends ('layouts.app')

@section('title','Servicios')

@section ('content')
      @csrf
  <div class="row">
   <div class="container">
  <div class="col-lg-8 com-md-8 col-sm-8 col-xs-12">
      <h1 style="font-weight: 1000; margin: 30px;">Seleccion Boton</h1>

      <a href="create" class="btn btn-danger" style="font-weight: 1000;">Salida</a>
      <a href="edit" class="btn btn-success" style="font-weight: 1000; ">Ingreso</a>
  </div>
@endsection