@extends ('layouts.app')

@section('title','Almuerzo')

@section ('content')
  {{ Form::open(['route' => 'almuerzo', 'files'=> 'true']) }}
      @csrf
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <h3>Registrar Salida de Almuerzo</h3> 
      <div class="form-group">
          <label for="">Legajo</label>
          <input type="text" name="legajo" class="form-control" placeholder="Ingreso Nro de Legajo..." required autofocus>
      </div>
      <div class="row">            
        <div class="col-lg-12 text-center">
          <a href="{{ url()->previous() }}" class="btn btn-danger btn-lg btn-block">Atras</a> 
        </div> 
      </div>           
    </div>
  </div>
</form> 
@endsection