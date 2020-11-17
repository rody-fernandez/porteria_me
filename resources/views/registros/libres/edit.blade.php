@extends ('layouts.admin')
@section('title','Editar')
@section ('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Cargo</h3>
{{ Form::model($almoso,['method'=>'PATCH','route'=>['almoso.update',$almoso->id]])}}
      @csrf
                <div class="form-group" required autofocus>
                    {{ Form::label('name', 'Nombre') }}
                    {{ Form::text('legajo', null, ['class' => 'form-control', 'id' => 'nomname_idbre']) }}
                </div> 
            <div class="form-group">
              <button class="btn btn-danger" type="submit">Regreso</button>
            </div>
			</form> 		           
		</div>
	</div>
@endsection