@extends ('layouts.admin')

@section('title','Motivos')

@section('content')
<div class="now">
	<div class="col-lg-8 com-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Motivos<a href="motivos/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('registros/motivos.search')
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
				@foreach ($motivos as $mot)
				<tr>
					<td>{{$mot->id}}</td>
					<td>{{$mot->nombre}}</td>
					<td>{{$mot->descripcion}}</td>
					@if($mot->status == 'Inactivo')
					<td bgcolor="#FA7872">{{$mot->status}}</td>
					@else
					<td bgcolor="#CFFA72">{{$mot->status}}</td>
           			 @endif
					<td>
						<a href="{{ route('motivos.edit', $mot->id)}}"><button class="btn btn-info">Editar</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$motivos->render()}}
	</div>
</div>
@endsection() 