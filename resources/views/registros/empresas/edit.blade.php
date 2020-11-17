@extends ('layouts.admin')
@section('title','Editar')
@section ('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Empresa</h3>
{{ Form::model($empresas,['method'=>'PATCH','route'=>['empresas.update',$empresas->id]])}}
      @csrf
                <div class="form-group">
                    {{ Form::label('name', 'Nombre') }}
                    {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('name', 'Descripción') }}
                    {{ Form::text('descripcion', null, ['class' => 'form-control', 'id' => 'descripcion']) }}
                </div>      
                <div class="form-group">
                    {!!Form::label('Estado')!!}
                    {!! Form::select('status', [
                         'Activo' => 'Activo',
                         'Inactivo' => 'Inactivo'],
                         null,
                         ['id'=>'status','class'=>'form-control', 'required'=>'required']
                      ) !!}
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