@extends ('layouts.admin')

@section('title','Historial')

@section('content')
<div class="now">
	<div class="col-lg-8 com-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Historial </h3>
		@include('ingresos.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 com-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>id</th>
					<th>Nombre</th>
					<th>Motivo</th>
					<th>Junto a</th>
					<th>Opciones</th>
				</thead>
				@foreach ($ingresos as $ingre)
				<tr>
					<td>{{$ingre->id}}</td>
					<td>{{$ingre->nombre}}</td>
					<td>{{$ingre->motivo}}</td>
					<td>{{$ingre->junto_a}}</td>
					<td>
						<a href=""><button class="btn btn-info">Ver más...</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$ingresos->render()}}
	</div>
</div>
@endsection() 