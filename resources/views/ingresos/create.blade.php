@extends ('layouts.admin')

@section('title','Ingreso')

@section ('content')
  {{ Form::open(['route' => 'ingresos.store', 'files'=> 'true']) }}
      @csrf
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>Registrar Ingreso</h3> 
			      <div class="form-group">
            <label for="">Nombre</label>
              <select name="nombre_id" class="form-control">
                <option>----</option>
                @foreach ($personas as $persona)
                @if  ($persona->empresa_id != 1)
                <option value="{{$persona->id}}">{{$persona->nombre}}</option>
                @endif  
                @endforeach
              </select>
            </div>
            <div class="form-group">
                <label for="">Motivo</label>
              <select name="motivo_id" class="form-control">
                 <option>----</option>
               @foreach($motivos as $motivo)
                <option value="{{$motivo->id}}">{{$motivo->nombre}}</option>
               @endforeach
              </select>
            </div>            
            <div class="form-group">
              <label for="">Junto a</label>
              <select name="junto_id" class="form-control">
                 <option>----</option>
                @foreach($personas as $persona)
                <option value="{{$persona->id}}">{{$persona->nombre}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
            <label for="">Autorizado por</label>
            	 <select name="autorizado_id" class="form-control">
                 <option>----</option>
                 @foreach ($personas as $persona)
                 @if  ($persona->empresa_id == 1)
                 <option value="{{$persona->id}}" >{{$persona->nombre}}</option>
                 @endif  
                 @endforeach
               </select>
            </div>
            <div class="form-group">
                  <input type="hidden" name="time" class="form-control" value="1" >
            </div>
            <div class="form-group">
                  <input type="hidden" name="status" class="form-control"value="2">
            </div>
            <div class="form-group">
                  <input type="hidden" name="boton" class="form-control"value="{{$botones->id}}">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-default" type="reset">Limpiar</button>
              <a href="{{ url()->previous() }}" class="btn btn-danger">Atras</a>
            </div>            
		</div>
	</div>
          </form> 
@endsection