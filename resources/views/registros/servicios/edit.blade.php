@extends ('layouts.admin')
@section('title','Editar')
@section ('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Cargo</h3>
{{ Form::model($servicios,['method'=>'PATCH','route'=>['servicios.update',$servicios->id]])}}
      @csrf
                <div class="form-group" required autofocus>
                    {{ Form::label('name', 'Legajo') }}
                    {{ Form::text('name_id', null, ['class' => 'form-control', 'id' => 'nomname_idbre']) }}
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