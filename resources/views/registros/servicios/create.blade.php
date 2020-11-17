@extends ('layouts.admin')

@section('title','Servicios')

@section ('content')
  {{ Form::open(['route' => 'servicios.store', 'files'=> 'true']) }}
      @csrf
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>Registrar Servicio Externo</h3>
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
              <label for="">Legajo</label>
              <input type="text" name="legajo" class="form-control" placeholder="Ingreso el servicio..." required autofocus>
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