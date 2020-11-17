@extends ('layouts.admin')
@section('title','Editar')
@section ('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Motivo</h3>
{{ Form::model($personas,['method'=>'PATCH','route'=>['personas.update',$personas->id], 'files'=> 'true'])}}
      @csrf
                <div class="form-group">
                    {{ Form::label('name', 'Nro Documento') }}
                    {{ Form::text('nro_documento', null, ['class' => 'form-control', 'id' => 'nro_documento']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('name', 'Nombre') }}
                    {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('name', 'Nacionalidad') }}
                    {{ Form::text('nacionalidad', null, ['class' => 'form-control', 'id' => 'nacionalidad']) }}
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                   <div class="form-group">
                     <label for="">Empresa</label>
                     <select name="empresa_id" class="form-control">
                     @foreach($empresas as $empresa)
                        @if ($empresa->id==$personas->empresa_id)
                        <option value="{{$empresa->id}}" selected>{{$empresa->nombre}}</option>
                        @else
                        <option value="{{$empresa->id}}" >{{$empresa->nombre}}</option>
                        @endif
                     @endforeach
                     </select>
                   </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                     <label for="">Cargo</label>
                     <select name="cargo_id" class="form-control">
                     @foreach($cargos as $cargo)
                          @if ($cargo->id==$personas->cargo_id)
                          <option value="{{$cargo->id}}" selected>{{$cargo->nombre}}</option>
                          @else
                          <option value="{{$cargo->id}}" >{{$cargo->nombre}}</option>
                          @endif
                     @endforeach
                    </select>
                  </div>  
                </div> 
              <div class="form-group">
                    {{ Form::label('name', 'Telefono') }}
                    {{ Form::text('telefono', null, ['class' => 'form-control', 'id' => 'telefono']) }}
                </div> 
                <div class="form-group">
                    {{ Form::label('name', 'Legajo') }}
                    {{ Form::text('legajo', null, ['class' => 'form-control', 'id' => 'legajo']) }}
                </div> 
                <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control-file" placeholder="foto" required>
            </div>    
              <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-default" type="reset">Limpiar</button>
              <a href="{{ url()->previous() }}" class="btn btn-danger">Atras</a> 
            </div>
			</form> 		           
		</div>
	</div>
@endsection