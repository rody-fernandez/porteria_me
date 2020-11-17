@extends ('layouts.app')

@section('title','Opcion')

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h1 class="text-center">Elijir una opcion</h1>
		<div class="row">            
        <div class="form-group col-sm-12 text-right">
         <a href="{{ url('panel/almoso/create'}}"><button class="btn btn-success btn-lg btn-block" type="submit">Almuerzo</button></a>        
         <a href="create2"><button href="libre" class="btn btn-danger btn-lg btn-block" type="submit">Tarde Libre</button></a>
	</div>
	</div>
</div>
@endsection() 