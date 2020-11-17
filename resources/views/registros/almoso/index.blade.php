@extends ('layouts.admin')

@section('title','Almuerzos')

@section('content')
<div class="now">
	<div class="col-lg-8 com-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Salida de Almuerzo<a href="almoso/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('registros/almoso.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 com-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre</th>
					<th>Fecha/Hora Salida</th>
				</thead>
				@foreach ($almoso as $alms)
				<tr>
					<td>{{get_legajo($alms->legajo)->nombre}}</td>
					<td>{{$alms->exit}}</td>
					<td>
					<td>
						<a href="{{ route('almoso.edit', $alms->id)}}"><button class="btn btn-info">Editar</button></a>
					</td>
				@endforeach
			</table>
		</div>
		{{$almoso->render()}}
	</div>
</div>
@endsection() 