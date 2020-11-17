@extends ('layouts.admin')

@section('title','Empresas')

@section('content')
<div class="now">
	<div class="col-lg-8 com-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Empresas<a href="empresas/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('registros/empresas.search')
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
				@foreach ($empresas as $emp)
				<tr>
					<td>{{$emp->id}}</td>
					<td>{{$emp->nombre}}</td>
					<td>{{$emp->descripcion}}</td>
					@if($emp->status == 'Inactivo')
					<td bgcolor="#FA7872">{{$emp->status}}</td>
					@else
					<td bgcolor="#CFFA72">{{$emp->status}}</td>
           			 @endif
					<td>
						<a href="{{ route('empresas.edit', $emp->id)}}"><button class="btn btn-info">Editar</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$empresas->render()}}
	</div>
</div>
@endsection() 