@extends ('layouts.admin')

@section('title','Historial')

@section('content')
<div class="now">
	<div class="col-lg-8 com-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Cargos<a href="cargos/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('registros/cargos.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 com-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>id</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Estado</th>
					<th>Opciones</th>
				</thead>
				@foreach ($cargos as $carg)
				<tr>
					<td>{{$carg->id}}</td>
					<td>{{$carg->nombre}}</td>
					<td>{{$carg->descripcion}}</td>
					@if($carg->status == 'Inactivo')
					<td bgcolor="#FA7872">{{$carg->status}}</td>
					@else
					<td bgcolor="#CFFA72">{{$carg->status}}</td>
           			 @endif
					<td>
						<a href="{{ route('cargos.edit', $carg->id)}}"><button class="btn btn-info">Editar</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$cargos->render()}}
	</div>
</div>
@endsection() 