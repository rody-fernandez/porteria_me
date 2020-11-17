@extends ('layouts.admin')

@section('title','Historial')

@section('content')
<div class="now">
	<div class="col-lg-8 com-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Servicios Externos   <a href="servicios/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('registros/cargos.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 com-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre</th>
					<th>Motivo</th>
					<th>Fecha/Hora Salida</th>
				</thead>
				@foreach ($servicios as $ser)
				<tr>
					<td>{{get_legajo($ser->legajo)->nombre}}</td>
					<td>{{get_motivos($ser->motivo_id)->nombre}}</td>
					<td>{{$ser->exit}}</td>
					<td>
						<a href="{{ route('servicios.edit', $ser->id)}}"><button class="btn btn-info">Editar</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$servicios->render()}}
	</div>
</div>
@endsection() 