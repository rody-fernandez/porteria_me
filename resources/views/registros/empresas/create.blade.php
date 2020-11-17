@extends ('layouts.admin')

@section('title','Empresas')

@section('content')
 {{ Form::open(['route' => 'empresas.store', 'files'=> 'true']) }}
       @csrf
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>Registrar Empresa</h3>
            
			<div class="form-group">
            	<label for="">Nombre</label>
            	<input type="text" name="nombre" class="form-control" placeholder="Ingresar el nombre de la Empresa..." required autofocus>
            </div>
            <div class="form-group">
            	<label for="">Descripcion</label>
            	<input type="text" name="descripcion" class="form-control" placeholder="Ingresar alguna descripcion..." required>
            
            </div>
            <div class="form-group">
                  <input type="hidden" name="status" value="Activo" class="form-control" >
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