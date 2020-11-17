@extends ('layouts.admin')

@section('title','Botones')

@section('content')
<div class="now">
	<div class="col-lg-8 com-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Botones<a href="botones/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('registros/botones.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 com-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Boton</th>
					<th>Opciones</th>
				</thead>
				@foreach ($botones as $boton)
				<tr>
					  @if($boton->status == 0)
					  <td bgcolor="#FA7872">{{$boton->numero}}</td>
					  @else
					  <td bgcolor="#CFFA72">{{$boton->numero}}</td>
           			  @endif
          			  </td>
					  <td>
						<a href="{{ route('botones.edit', $boton->id)}}"><button class="btn btn-info">Editar</button></a>
					  </td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$botones->render()}}
	</div>
</div>
@endsection() 