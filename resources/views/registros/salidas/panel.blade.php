@extends ('layouts.app')

@section('title','Opcion')

@section('content')
<div class="row">
    <div class="col-lg-12 text-center">
		<h1>Elijir una opcion</h1>            
        <p>
         <a href="{{ url('almuerzo')}}" name="almuerzo" class="btn btn-success btn-lg">Almuerzo</a>    
         <a href="{{ url('libre')}}"><button href="libre" class="btn btn-danger btn-lg" type="submit">Tarde Libre</button></a>       
        </p>
	</div>
</div>
@endsection() 