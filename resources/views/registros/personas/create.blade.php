@extends ('layouts.admin')

@section('title','Persona')

@section('content')
<dir class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    {{ Form::open(['route' => 'personas.store', 'files'=> 'true']) }}
    @csrf
	    <h3>Registrar </h3>
		  <div class="form-group">
            	<label for="nro_documento">Nro Documento</label>
            	<input type="text" name="nro_documento" class="form-control" placeholder="Nro de documento..." required autofocus>
      </div>
      <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" class="form-control" placeholder="Nombre y Apellido..." required autofocus>
      </div>
      <div class="form-group">
                <label for="nacionalidad">Nacionalidad</label>
                <input type="text" name="nacionalidad" class="form-control" placeholder="Paraguaya, Brasilera o Argentina..." required autofocus>
      </div>
      <div class="form-group">
          <label for="">Empresa</label>
            <select name="empresa_id" class="form-control">
              <option>----</option>
              @foreach($empresas as $empresa)
              <option value="{{$empresa->id}} " >{{$empresa->nombre}}</option>
              @endforeach
            </select>
      </div>
      <div class="form-group">
          <label for="">Cargo</label>
            <select name="cargo_id" class="form-control">
              <option>----</option>
              @foreach($cargos as $cargo)
              <option value="{{$cargo->id}}">{{$cargo->nombre}}</option>
              @endforeach
            </select>
      </div>
      <div class="form-group">
          <label for="telefono">Telefono</label>
            <input type="text" name="telefono" class="form-control" placeholder="Nro de telefono..." required autofocus>
      </div>
      <div class="form-group">
        <label for="foto">Legajo</label>
              <input type="text" name="legajo" class="form-control" required autofocus>
      </div>
      <div class="form-group">
          <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control-file" placeholder="foto" required autofocus>
      </div>
	        <button type="submit" class="btn btn-primary">Guardar</button>
          <button class="btn btn-default" type="reset">Limpiar</button>
              <a href="{{ url()->previous() }}" class="btn btn-danger">Atras</a> 
    {!!Form::close()!!}
  </div>
</dir>
@endsection() 