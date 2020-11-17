@extends ('layouts.admin')

@section('title','Almuerzos')

@section('content')
<div class="now">
	<div class="col-lg-8 com-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Salida de Almuerzo<a href="almuerzos/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('registros/salidas.search_al')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 com-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>id</th>
					<th>Legajo</th>
					<th>Nombre</th>
					<th>Fecha/Hora</th>
				</thead>
				@foreach ($almosos as $alms)
				<tr>
					<td>{{$alms->id}}</td>
					<td>{{$alms->legajo}}</td>
					<td>{{get_legajo($alms->legajo)->nombre}}</td>
					<td>{{$alms->exit}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$almosos->render()}}
	</div>
</div>
@endsection() 