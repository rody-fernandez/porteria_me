@extends ('layouts.admin')

@section('title','Botones')

@section('content')
 {{ Form::open(['route' => 'botones.store', 'files'=> 'true']) }}
       @csrf
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>Registrar Boton</h3>
            
			<div class="form-group">
            	<label for="">Numero</label>
            	<input type="text" name="numero" class="form-control" placeholder="Numero en letras..." required autofocus>
            </div>
            <div class="form-group">
            	<input type="hidden" name="status" value="1" class="form-control" placeholder="Ingresar Estado..." required>
            
            </div>
            <div class="form-group">
              <input type="hidden" name="time" value="10" class="form-control" required>
            </div>
             
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-default" type="reset">Limpiar</button>
              <a href="{{ url()->previous() }}" class="btn btn-danger">Atras</a>
            </div>            
		</div>
	</div>
           </form> 
@endsection() 