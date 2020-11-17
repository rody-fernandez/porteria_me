@extends ('layouts.admin')

@section('title','Personas')

@section('content')
<div class="now">
	<div class="col-lg-8 com-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Personas<a href="personas/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('registros/personas.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 com-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>id</th>
					<th>Nombre</th>
					<th>Nacionalidad</th>
					<th>Empresa</th>
					<th>Cargo</th>
					<th>Nro Documento</th>
					<th>Telefono</th>
					<th>Foto</th>
					<th>Opciones</th>
				</thead>
				@foreach ($personas as $per)
				<tr>
					<td>{{$per->id}}</td>
					<td>{{$per->nombre}}</td>
					<td>{{$per->nacionalidad}}</td>
					<td>{{get_empresas($per->empresa_id)->nombre}}</td>
					<td>{{get_cargos($per->cargo_id)->nombre}}</td>
					<td>{{$per->nro_documento}}</td>
					<td>{{$per->telefono}}</td>
					<td><img style="height: 53px; width: 58px;" class="card-img-top" src="img/{{$per->foto}}" alt=""></td>
					<td>
						<a href="{{ route('personas.edit', $per->id)}}"><button class="btn btn-info">Editar</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$personas->render()}}
	</div>
</div>
@endsection() 