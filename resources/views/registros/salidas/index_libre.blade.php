@extends ('layouts.admin')

@section('title','Tarde Libre')

@section('content')
<div class="now">
	<div class="col-lg-8 com-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Salida a Tarde libre</h3>
		@include('registros/salidas.search_lb')
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
				@foreach ($libres as $lb)
				<tr>
					<td>{{$lb->id}}</td>
					<td>{{$lb->legajo}}</td>
					<td>{{get_legajo($lb->legajo)->nombre}}</td>
					<td>{{$lb->exit}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$libres->render()}}
	</div>
</div>
@endsection() 