@extends ('layouts.admin')

@section('title','Historial')

@section('content')
<div class="now">
	<div class="col-lg-8 com-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Historial <a href="registros/botones"><button class="btn btn-success">Nuevo</button></a></h3></h3>
		@include('registros/botones.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 com-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>Numero</th>
					<th>Estado</th>
					<th>Tiempo</th>
					<th>Opciones</th>
				</thead>
				@foreach ($botones as $boton)
				<tr>
					<td>{{$boton->id}}</td>
					<td>{{$boton->numero}}</td>
					<td>{{$boton->status}}</td>
					<td>{{$boton->time_inicio}}</td>
					<td>
						<a href=""><button class="btn btn-info">Ver más...</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$botones->render()}}
	</div>
</div>
@endsection() 