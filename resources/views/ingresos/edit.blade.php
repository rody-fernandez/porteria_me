@extends ('layouts.admin')

@section('title','Editar')

@section ('content')
{{ Form::model($ingresos,['method'=>'PATCH','route'=>['ingresos.update',$ingresos->id]])}}
      @csrf
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>Finalizar Ingreso</h3> 
            <div class="form-group">
              <label for="nombre">Nombre</label>  
              <input type="text" name="nombre_id" readonly="true" class="form-control" required value="{{$nombres->nombre}}" >    
            </div>
            <div class="form-group">
              <label for="nombre">Motivo</label>
              <input type="text" name="motivo_id" readonly="true" class="form-control" required value="{{$motivos->nombre}}">
            </div>
            <div class="form-group">
              <label for="nombre">Junto a</label>
              <input type="text" name="junto_id" readonly="true" class="form-control" required value="{{$junto->nombre}}">
          </div>
            <div class="form-group">
              <label for="nombre">Autorizado por</label>
              <input type="text" name="autorizado_id" readonly="true" class="form-control" required value="{{$autorizado->nombre}}">
            </div>
           <div class="form-group">
                  <input type="hidden" name="time" class="form-control"value="0">
               </div>
            <div class="form-group">
                  <input type="hidden" name="status" class="form-control"value="1">
            </div>
            <div class="form-group">
                  <input type="hidden" name="boton" class="form-control"value="{{$botones->id}}">
            </div>
            <div class="form-group">
              <button class="btn btn-default" type="submit">Salida</button>
              <a href="{{ url()->previous() }}" class="btn btn-danger">Atras</a> 
            </div>           
    </div>
  </div>
          </form> 
@endsection