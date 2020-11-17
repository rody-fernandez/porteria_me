@extends ('layouts.admin')

@section('title','Almuerzo')

@section ('content')
  {{ Form::open(['route' => 'almuerzos.store', 'files'=> 'true']) }}
      @csrf
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>Registrar Salida de Almuerzo</h3> 
            <div class="form-group">
            <label for="">Nombre</label>
              <select name="name_id" class="form-control">
                <option>----</option>
                @foreach ($personas as $persona)
                <option value="{{$persona->id}}">{{$persona->nombre}}</option> 
                @endforeach
              </select>
            </div>
            <div class="form-group">
                  <input type="hidden" name="status" class="form-control"value="Activo">
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