@extends ('layouts.admin')
@section ('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Boton</h3>
{{ Form::model($botones,['method'=>'PATCH','route'=>['botones.update',$botones->id]])}}
      @csrf
                <div class="form-group">
                    {{ Form::label('name', 'Numero') }}
                    {{ Form::text('numero', null, ['class' => 'form-control', 'id' => 'numero']) }}
                </div>     
                <div class="form-group">
                    {!!Form::label('Estado')!!}
                    {!! Form::select('status', [
                         '1' => 'Activo',
                         '0' => 'Inactivo'],
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